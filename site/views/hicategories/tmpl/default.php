<?php 

defined( '_JEXEC' ) or die;

foreach($this->items as $item):?>
<?php $url = 'index.php?option=com_hiplayer&view=hicategorie&id='. $item->categorie_id;?>
<h3><a href="<?php echo JRoute::_($url); ?>"><?php echo $this->escape($item->categorie_name) ?></a></h3>

<?php endforeach ?>