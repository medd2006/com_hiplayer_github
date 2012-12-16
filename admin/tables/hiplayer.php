<?php
defined( '_JEXEC' ) or die;

class HiplayerTableHiplayer extends JTable
{
	public function __construct(&$db)
	{
		parent::__construct('#__hiplayer', 'audio_id', $db);
	}

}
