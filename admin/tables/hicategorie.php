<?php
defined( '_JEXEC' ) or die;

class HiplayerTableHicategorie extends JTable
{
	public function __construct(&$db)
	{
		parent::__construct('#__hicategorie', 'categorie_id', $db);
	}

}
