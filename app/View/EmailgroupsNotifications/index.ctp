<div class="emailgroupsNotifications index">
	<h2><?php echo __('Emailgroups Notifications'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('emailgroup_id'); ?></th>
			<th><?php echo $this->Paginator->sort('notification_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('mandatory'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($emailgroupsNotifications as $emailgroupsNotification): ?>
	<tr>
		<td><?php echo h($emailgroupsNotification['EmailgroupsNotification']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($emailgroupsNotification['Emailgroup']['name'], array('controller' => 'emailgroups', 'action' => 'view', $emailgroupsNotification['Emailgroup']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($emailgroupsNotification['Notification']['id'], array('controller' => 'notifications', 'action' => 'view', $emailgroupsNotification['Notification']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($emailgroupsNotification['User']['name'], array('controller' => 'users', 'action' => 'view', $emailgroupsNotification['User']['id'])); ?>
		</td>
		<td><?php echo h($emailgroupsNotification['EmailgroupsNotification']['mandatory']); ?>&nbsp;</td>
		<td><?php echo h($emailgroupsNotification['EmailgroupsNotification']['created']); ?>&nbsp;</td>
		<td><?php echo h($emailgroupsNotification['EmailgroupsNotification']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $emailgroupsNotification['EmailgroupsNotification']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $emailgroupsNotification['EmailgroupsNotification']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $emailgroupsNotification['EmailgroupsNotification']['id']), array(), __('Are you sure you want to delete # %s?', $emailgroupsNotification['EmailgroupsNotification']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Emailgroups Notification'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Emailgroups'), array('controller' => 'emailgroups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Emailgroup'), array('controller' => 'emailgroups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notifications'), array('controller' => 'notifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Notification'), array('controller' => 'notifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
