<?php
defined( '_JEXEC' ) or die('Restricted access');

jimport('joomla.application.component.modellist');

class HiplayerModelHiplayer extends JModelList
{
	public function getListQuery()
	{
		$query = parent::getListQuery();

		$query->select('*');
		$query->from('#__hiplayer');
		$query->where('published = 1');

		return $query;
	}
}