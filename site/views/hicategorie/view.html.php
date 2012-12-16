<?php 
defined( '_JEXEC' ) or die;

jimport('joomla.application.component.view');


class HiplayerViewHicategorie extends JView
{
	protected $item;
	
	public function display($tpl = null)
	{
		$this->item = $this->get('Item');
		
		
		parent::display($tpl);	
	
	}

}

?>