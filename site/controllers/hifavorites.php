<?php
defined( '_JEXEC' ) or die;

jimport('joomla.application.component.controller');

class HiplayerControllerHifavorites extends JController
{
	public function __construct($config = array())
	{
		parent::__construct($config);

		$this->registerTask('unfavorite', 'setFavorite');
		$this->registerTask('favorite', 'setFavorite');
	}

	public function setFavorite()
	{
		$task = $this->getTask();
		$audio_id = JRequest::getInt('audio_id', 0);

		$model = $this->getModel('Hifavorites');

		$user_id = JFactory::getUser()->id;

		if ($user_id) {
			if ($task == 'favorite') {
				$model->addFavorite($audio_id, $user_id);
			} else {
				$model->removeFavorite($audio_id, $user_id);
			}

			echo json_encode(array('state' => $task));
		} else {
			echo json_encode(array('state' => 'error'));
		}

	}
}