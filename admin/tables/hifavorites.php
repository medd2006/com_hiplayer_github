<?php
defined( '_JEXEC' ) or die;

class HiplayerTableHifavorites extends JTable
{
	public function __construct(&$db)
	{
		parent::__construct('#__hifavorites', 'favorite_id', $db);
	}
}
