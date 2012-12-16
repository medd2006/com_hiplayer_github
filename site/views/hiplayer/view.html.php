
<?php
defined( '_JEXEC' ) or die;

jimport( 'joomla.application.component.view');

class HiplayerViewHiplayer extends JView
{
	protected $items;
	protected $pagination;

	public function display($tpl = null)
	{
		$this->items = $this->get('Items');
		$this->pagination = $this->get('Pagination');
		
		parent::display($tpl);
	}
}

?>