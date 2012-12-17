<?php
defined( '_JEXEC' ) or die;

$document = JFactory::getDocument();
$document->addScript(JURI::base() . 'media/com_hiplayer/build/jquery-1.8.3.min.js');
$document->addScript(JURI::base() . 'media/com_hiplayer/build/mediaelement-and-player.min.js');
$document->addScript(JURI::base() . 'media/com_explore/js/jquery-noconflict.js');
$document->addStyleSheet(JURI::base() . 'media/com_hiplayer/build/mediaelementplayer.min.css');
$document->addStyleSheet(JURI::base() . 'media/com_hiplayer/css/favoris.css');


?>
	<table class="table table-striped" width="100%">
	              <thead>
	                <tr>
	                  <th>N°</th>
	                  <th>Téléchargement</th>
	                  <th>Last Name</th>
	                  <th>Lecture</th>
					<th>Durée</th>
	                </tr>
	              </thead>
	              <thead>
	                <tfoot>
	                  <tr >
	                  <td colspan='5'><?php echo $this->pagination->getListFooter(); ?></td>
	                  
	                </tr>
	              </tfoot>
	              <tbody>
				<?php foreach ($this->items as $item): ?>
	                <tr>
	                  <td><?php echo $item->audio_id ?></td>
						<td><a href="<?php echo JURI::base() . $item->audio_path ?>" target="_blank" >Icon</a></td>
						
	                  <td><?php echo $item->audio_name ?></td>
	                  <td><audio id="player" src="<?php echo JURI::base() . $item->audio_path ?>" tyoe="audio/mp3" controls="controls"></audio></td>
	                  <td>@mdo</td>
	                </tr>
	        	<?php endforeach ?>       
	              </tbody>
	            </table>
				<script>
					$(document).ready(function(){
						
						$('audio,video').mediaelementplayer();
					});
				</script>

	