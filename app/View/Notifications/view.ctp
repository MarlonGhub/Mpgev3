<div class="notifications view">
<h2><?php echo __('Notification'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($notification['Notification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job'); ?></dt>
		<dd>
			<?php echo $this->Html->link($notification['Job']['name'], array('controller' => 'jobs', 'action' => 'view', $notification['Job']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pa'); ?></dt>
		<dd>
			<?php echo h($notification['Notification']['pa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Js'); ?></dt>
		<dd>
			<?php echo h($notification['Notification']['js']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dn'); ?></dt>
		<dd>
			<?php echo h($notification['Notification']['dn']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Notification'), array('action' => 'edit', $notification['Notification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Notification'), array('action' => 'delete', $notification['Notification']['id']), array(), __('Are you sure you want to delete # %s?', $notification['Notification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Notifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Notification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Emailgroups'), array('controller' => 'emailgroups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Emailgroup'), array('controller' => 'emailgroups', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Emailgroups'); ?></h3>
	<?php if (!empty($notification['Emailgroup'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($notification['Emailgroup'] as $emailgroup): ?>
		<tr>
			<td><?php echo $emailgroup['id']; ?></td>
			<td><?php echo $emailgroup['name']; ?></td>
			<td><?php echo $emailgroup['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'emailgroups', 'action' => 'view', $emailgroup['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'emailgroups', 'action' => 'edit', $emailgroup['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'emailgroups', 'action' => 'delete', $emailgroup['id']), array(), __('Are you sure you want to delete # %s?', $emailgroup['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Emailgroup'), array('controller' => 'emailgroups', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
