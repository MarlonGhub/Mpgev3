<div class="uploads form">
<?php echo $this->Form->create('Upload'); ?>
	<fieldset>
		<legend><?php echo __('Edit Upload'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('type');
		echo $this->Form->input('name');
		echo $this->Form->input('is_accepted');
		echo $this->Form->input('filesize');
		echo $this->Form->input('path');
		echo $this->Form->input('job_id');
		echo $this->Form->input('capnumber');
		echo $this->Form->input('uploadtype_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Upload.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Upload.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Uploads'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Uploadtypes'), array('controller' => 'uploadtypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uploadtype'), array('controller' => 'uploadtypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
