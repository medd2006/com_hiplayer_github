<?php
defined( '_JEXEC' ) or die;

jimport( 'joomla.application.component.view');

class HiplayerViewEdithicategorie extends JView
{
	protected $item;
	protected $form;

	public function display($tpl = null)
	{
		$this->item = $this->get('Item');
		$this->form = $this->get('Form');

		$this->addToolbar();

		parent::display($tpl);
	}

	public function addToolbar()
	{
		if ($this->item->categorie_id) {
			JToolBarHelper::title(JText::_('COM_HIPLAYER_EDIT_CATEGORIE_AUDIO_TITLE'));
		} else {
			JToolBarHelper::title(JText::_('COM_HIPLAYER_ADD_CATEGORIE_AUDIO_TITLE'));
		}

		JToolBarHelper::apply('edithicategorie.apply', 'JTOOLBAR_APPLY');
		JToolBarHelper::save('edithicategorie.save', 'JTOOLBAR_SAVE');
		JToolBarHelper::save2new('edithicategorie.save2new', 'JTOOLBAR_SAVE_AND_NEW');
		
		
		JToolBarHelper::cancel('edithicategorie.cancel', 'JTOOLBAR_CLOSE');
	}
}

