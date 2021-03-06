<?php
$columns = array(
	'left' => array(),
	'right' => array()
);

foreach ($xmlFieldSet->children() as $field) {
	$columns[(string)$field['column']][] = $field;
}
?>
<div class="row-fluid">
	<?php foreach ($columns as $column): ?>
		<div class="span6">
			<?php foreach ($column as $field): ?>
				<fieldset class="<?php echo $field['name'] ?>">
				<legend><?php echo JText::_($field['label']) ?></legend>
				<?php foreach ($field->children() as $innerField): ?>
					<?php $input = $this->adminForm->getField($innerField['name'], 'jsn') ?>
					<div class="control-group">
						<div class="control-label">
							<label for="<?php echo $input->id ?>" rel="tipsy" title="<?php echo JText::_($innerField['label'] . '_DESC') ?>">
								<?php echo JText::_($innerField['label']) ?>
							</label>
						</div>
						<div class="controls">
							<?php echo $input->input ?>
						</div>
					</div>
				<?php endforeach ?>
			</fieldset>
			<?php endforeach ?>
		</div>
	<?php endforeach ?>
</div>