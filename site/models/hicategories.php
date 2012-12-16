<?php
defined( '_JEXEC' ) or die('Restricted access');

jimport('joomla.application.component.modellist');

class HiplayerModelHicategories extends JModelList
{
	public function getListQuery()
	{
		$query = parent::getListQuery();

		$query->select('*');
		$query->from('#__hicategorie');
		$query->where('published = 1');

		return $query;
	}
}