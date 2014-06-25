<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('fname');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('group_id');
		echo $this->Form->input('phone');
		echo $this->Form->input('extension');
		echo $this->Form->input('lname');
		echo $this->Form->input('Emailgroup');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Emailgroups'), array('controller' => 'emailgroups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Emailgroup'), array('controller' => 'emailgroups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Emailgroups Notifications'), array('controller' => 'emailgroups_notifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Emailgroups Notification'), array('controller' => 'emailgroups_notifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
