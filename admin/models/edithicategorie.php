<?php
defined( '_JEXEC' ) or die;

jimport('joomla.application.component.modeladmin');

class HiplayerModelEdithicategorie extends JModelAdmin
{
	public function getTable($type = 'Hicategorie', $prefix = 'HiplayerTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}
	
	protected function loadFormData()
	{
		$data = JFactory::getApplication()->getUserState('com_hiplayer.edit.edithicategorie.data', array());

		if (empty($data)) {
			$data = $this->getItem();
		}

		return $data;
	}

	public function getForm($data = array(), $loadData = true)
	{
		$form = $this->loadForm('com_hiplayer.edithicategorie', 'edithicategorie', array('control' => 'jform', 'load_data' => $loadData));

		return $form;
	}
}

