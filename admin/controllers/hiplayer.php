<?php
defined( '_JEXEC' ) or die;

jimport('joomla.application.component.controlleradmin');

class HiplayerControllerHiplayer extends JControllerAdmin
{
	protected $text_prefix = 'COM_HIPLAYER';

	public function getModel($name = 'Hiaudio', $prefix = 'HiplayerModel', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);

		return $model;
	}
}