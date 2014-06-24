<div class="emailgroupsNotifications form">
<?php echo $this->Form->create('EmailgroupsNotification'); ?>
	<fieldset>
		<legend><?php echo __('Add Emailgroups Notification'); ?></legend>
	<?php
		echo $this->Form->input('emailgroup_id');
		echo $this->Form->input('notification_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('mandatory');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Emailgroups Notifications'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Emailgroups'), array('controller' => 'emailgroups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Emailgroup'), array('controller' => 'emailgroups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notifications'), array('controller' => 'notifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Notification'), array('controller' => 'notifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
