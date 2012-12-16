<?php 

defined( '_JEXEC' ) or die;

foreach($this->item as $t):?>

<h3><?php echo $this->escape($t->audio_name) ?></h3>

<?php endforeach ?>