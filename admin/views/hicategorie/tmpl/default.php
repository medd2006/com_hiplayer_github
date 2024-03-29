<?php 
defined( '_JEXEC' ) or die; 
$listOrder = $this->escape($this->state->get('list.ordering'));
$listDirn = $this->escape($this->state->get('list.direction'));
?>
<form action="index.php?option=com_hiplayer&amp;view=hicategorie" method="post" name="adminForm" id="adminForm">
	
	<fieldset id="filter-bar">
		
		<div class="filter-search fltlft">
			<label for="filter_search"><?php echo JText::_('JSEARCH_FILTER_LABEL'); ?></label>
			<input type="text" name="filter_search" id="filter_search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" title="Search" />

			<button type="submit" class="btn"><?php echo JText::_('JSEARCH_FILTER_SUBMIT'); ?></button>
			<button type="button" onclick="document.id('filter_search').value='';this.form.submit();"><?php echo JText::_('JSEARCH_FILTER_CLEAR'); ?></button>
		</div>
		
		<div class="filter-select fltrt">

			<select name="filter_published" class="inputbox" onchange="this.form.submit()">
				<option value=""><?php echo JText::_('JOPTION_SELECT_PUBLISHED');?></option>
				<?php echo JHtml::_('select.options', JHtml::_('jgrid.publishedOptions'), 'value', 'text', $this->state->get('filter.published'), true);?>
			</select>
		</div>
	</fieldset>
	<table class="adminlist">
		<thead>
			<tr>
			<th width="3%"><?php echo JHtml::_('grid.sort', 'COM_HIPLAYER_HIAUDIO_ID_LABEL', 'categorie_id', $listDirn, $listOrder) ?></th>
				<th width="3%">
					<input type="checkbox" name="checkall-toggle" value="" onclick="checkAll(this)" />
				</th>
				<th width="25%"><?php echo JHtml::_('grid.sort', 'COM_HIPLAYER_FIELD_AUDIO_NAME_LABEL', 'categorie_name', $listDirn, $listOrder) ?></th>
				<th width=""><?php echo JHtml::_('grid.sort', 'COM_HIPLAYER_FIELD_AUDIO_DESCRIPTION_LABEL', 'categorie_description', $listDirn, $listOrder) ?></th>
				<th width="10%"><?php echo JHtml::_('grid.sort', 'COM_HIPLAYER_HIAUDIO_CATEGORIE_LABEL', 'categorie_id', $listDirn, $listOrder) ?></th>
				<th width=""><?php echo JHtml::_('grid.sort', 'JSTATUS', 'published', $listDirn, $listOrder) ?></th>
			</tr>
		</thead>
			<tfoot>
			<tr>
				<td colspan="6">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
			<?php foreach ($this->items as $i => $item): ?>
				<tr class="row<?php echo $i % 2 ?>">
					<td><?php echo $item->categorie_id; ?></td>
					<td class="center">
						<?php echo JHtml::_('grid.id', $i, $item->categorie_id); ?>
					</td>
					<td >
						<a href="<?php echo $item->url; ?>">
						<?php echo $this->escape($item->categorie_name) ?></a>
					</td>
					<td><?php echo $this->escape($item->categorie_description) ?></td>
					<td><?php echo $this->escape($item->categorie_id) ?></td>
					<td class="center">
						<?php echo JHtml::_('jgrid.published',
						$item->published, $i, 'hicategorie.', true, 'cb'); ?>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>

	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="filter_order" value="<?php echo $listOrder; ?>" />
	<input type="hidden" name="filter_order_Dir" value="<?php echo $listDirn; ?>" />
	<?php echo JHtml::_('form.token'); ?>
</form>