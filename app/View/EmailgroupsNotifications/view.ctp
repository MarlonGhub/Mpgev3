<div class="emailgroupsNotifications view">
<h2><?php echo __('Emailgroups Notification'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($emailgroupsNotification['EmailgroupsNotification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emailgroup'); ?></dt>
		<dd>
			<?php echo $this->Html->link($emailgroupsNotification['Emailgroup']['name'], array('controller' => 'emailgroups', 'action' => 'view', $emailgroupsNotification['Emailgroup']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notification'); ?></dt>
		<dd>
			<?php echo $this->Html->link($emailgroupsNotification['Notification']['id'], array('controller' => 'notifications', 'action' => 'view', $emailgroupsNotification['Notification']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($emailgroupsNotification['User']['name'], array('controller' => 'users', 'action' => 'view', $emailgroupsNotification['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mandatory'); ?></dt>
		<dd>
			<?php echo h($emailgroupsNotification['EmailgroupsNotification']['mandatory']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($emailgroupsNotification['EmailgroupsNotification']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($emailgroupsNotification['EmailgroupsNotification']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Emailgroups Notification'), array('action' => 'edit', $emailgroupsNotification['EmailgroupsNotification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Emailgroups Notification'), array('action' => 'delete', $emailgroupsNotification['EmailgroupsNotification']['id']), array(), __('Are you sure you want to delete # %s?', $emailgroupsNotification['EmailgroupsNotification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Emailgroups Notifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Emailgroups Notification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Emailgroups'), array('controller' => 'emailgroups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Emailgroup'), array('controller' => 'emailgroups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notifications'), array('controller' => 'notifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Notification'), array('controller' => 'notifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
