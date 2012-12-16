<?php
defined( '_JEXEC' ) or die('Restricted access');

jimport('joomla.application.component.model');

class HiplayerModelHicategorie extends JModel
{
	public function getItem()
	{
		$categorie_id = JRequest::getInt('id');
		
		$db = $this->getDbo();
		$query = $db->getQuery(true);

		$query->select('*');
		$query->from('#__hiplayer');
		$query->where("categorie_id = '{$categorie_id}'");

		
		$db->setQuery($query);
		
		$rows = $db->loadObjectList();
		
		return $rows;
	}
}