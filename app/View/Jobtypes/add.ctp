<div class="jobtypes form">
<?php echo $this->Form->create('Jobtype'); ?>
	<fieldset>
		<legend><?php echo __('Add Jobtype'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Jobtypes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Envelopes'), array('controller' => 'envelopes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Envelope'), array('controller' => 'envelopes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
