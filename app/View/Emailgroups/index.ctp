<div class="emailgroups index">
	<h2><?php echo __('Emailgroups'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($emailgroups as $emailgroup): ?>
	<tr>
		<td><?php echo h($emailgroup['Emailgroup']['id']); ?>&nbsp;</td>
		<td><?php echo h($emailgroup['Emailgroup']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($emailgroup['User']['name'], array('controller' => 'users', 'action' => 'view', $emailgroup['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $emailgroup['Emailgroup']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $emailgroup['Emailgroup']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $emailgroup['Emailgroup']['id']), array(), __('Are you sure you want to delete # %s?', $emailgroup['Emailgroup']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Emailgroup'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notifications'), array('controller' => 'notifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Notification'), array('controller' => 'notifications', 'action' => 'add')); ?> </li>
	</ul>
</div>
