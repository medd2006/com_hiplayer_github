<?php
defined( '_JEXEC' ) or die;

jimport( 'joomla.application.component.view');

class HiplayerViewHiaudio extends JView
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
		if ($this->item->audio_id) {
			JToolBarHelper::title(JText::_('COM_HIPLAYER_EDIT_AUDIO_TITLE'));
		} else {
			JToolBarHelper::title(JText::_('COM_HIPLAYER_EDIT_AUDIO_TITLE'));
		}

		JToolBarHelper::apply('hiaudio.apply', 'JTOOLBAR_APPLY');
		JToolBarHelper::save('hiaudio.save', 'JTOOLBAR_SAVE');
		JToolBarHelper::save2new('hiaudio.save2new', 'JTOOLBAR_SAVE_AND_NEW');
		
		
		JToolBarHelper::cancel('hiaudio.cancel', 'JTOOLBAR_CLOSE');
	}
}

