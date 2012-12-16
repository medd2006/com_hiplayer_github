<?php
defined( '_JEXEC' ) or die;

jimport('joomla.application.component.controlleradmin');

class HiplayerControllerHicategorie extends JControllerAdmin
{
	protected $text_prefix = 'COM_HIPLAYER_CATEGORIE';

	public function getModel($name = 'Edithicategorie', $prefix = 'HiplayerModel', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);

		return $model;
	}
}