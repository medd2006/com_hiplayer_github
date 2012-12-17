<?php
defined( '_JEXEC' ) or die;

jimport('joomla.application.component.modellist');

class HiplayerModelHifavorites extends JModelList
{
	public function addFavorite($audio_id, $user_id)
	{
		$item = $this->getTable('Hifavorites', 'HiplayerTable');
		$item->audio_id = $audio_id;
		$item->user_id = $user_id;
		$item->store();
	}

	public function removeFavorite($audio_id, $user_id)
	{
		$db = $this->getDbo();
		$query = $db->getQuery(true);

		$query->delete('#__hifavorites');
		$query->where('user_id = ' . $user_id);
		$query->where('audio_id = ' . $audio_id);

		$db->setQuery($query)->query();
	}
}