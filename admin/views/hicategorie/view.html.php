<?php
defined( '_JEXEC' ) or die;

jimport( 'joomla.application.component.view');

class HiplayerViewHicategorie extends JView
{
	protected $items;
	protected $pagination;
	protected $state;


	public function display($tpl = null)
	{
		$this->items = $this->get('Items');
		$this->pagination = $this->get('Pagination');
		$this->state = $this->get('State');
		

		$this->addToolbar();

		parent::display($tpl);
	}

	public function addToolbar()
	{
		JToolBarHelper::title(JText::_('COM_HIPLAYER_TITLE'));

		JToolBarHelper::addNew('edithicategorie.add');
		JToolBarHelper::editList('edithicategorie.edit');

		JToolBarHelper::divider();

		JToolBarHelper::publishList('hicategorie.publish');
		JToolBarHelper::unpublishList('hicategorie.unpublish');

		JToolBarHelper::divider();

		JToolBarHelper::trash('hicategorie.delete');
		
		JToolBarHelper::preferences('com_hiplayer');
		
	}
}