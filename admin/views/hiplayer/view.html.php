<?php
defined( '_JEXEC' ) or die;

jimport( 'joomla.application.component.view');

class HiplayerViewHiplayer extends JView
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

		JToolBarHelper::addNew('hiaudio.add');
		JToolBarHelper::editList('hiaudio.edit');

		JToolBarHelper::divider();

		JToolBarHelper::publishList('hiplayer.publish');
		JToolBarHelper::unpublishList('hiplayer.unpublish');

		JToolBarHelper::divider();

		JToolBarHelper::trash('hiplayer.delete');
		
		JToolBarHelper::preferences('com_hiplayer');
		
	}
}