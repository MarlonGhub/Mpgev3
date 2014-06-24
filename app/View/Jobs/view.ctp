<div class="jobs view">
<h2><?php echo __('Job'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($job['Job']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Capnumber'); ?></dt>
		<dd>
			<?php echo h($job['Job']['capnumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($job['Job']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qty'); ?></dt>
		<dd>
			<?php echo h($job['Job']['qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Duedate'); ?></dt>
		<dd>
			<?php echo h($job['Job']['duedate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($job['User']['name'], array('controller' => 'users', 'action' => 'view', $job['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Envelope'); ?></dt>
		<dd>
			<?php echo $this->Html->link($job['Envelope']['name'], array('controller' => 'envelopes', 'action' => 'view', $job['Envelope']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jobtype'); ?></dt>
		<dd>
			<?php echo $this->Html->link($job['Jobtype']['name'], array('controller' => 'jobtypes', 'action' => 'view', $job['Jobtype']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($job['Job']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($job['Job']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Job'), array('action' => 'edit', $job['Job']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Job'), array('action' => 'delete', $job['Job']['id']), array(), __('Are you sure you want to delete # %s?', $job['Job']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Envelopes'), array('controller' => 'envelopes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Envelope'), array('controller' => 'envelopes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobtypes'), array('controller' => 'jobtypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobtype'), array('controller' => 'jobtypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notes'), array('controller' => 'notes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Note'), array('controller' => 'notes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notifications'), array('controller' => 'notifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Notification'), array('controller' => 'notifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Uploads'), array('controller' => 'uploads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upload'), array('controller' => 'uploads', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Notes'); ?></h3>
	<?php if (!empty($job['Note'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Job Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($job['Note'] as $note): ?>
		<tr>
			<td><?php echo $note['id']; ?></td>
			<td><?php echo $note['note']; ?></td>
			<td><?php echo $note['job_id']; ?></td>
			<td><?php echo $note['created']; ?></td>
			<td><?php echo $note['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'notes', 'action' => 'view', $note['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'notes', 'action' => 'edit', $note['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'notes', 'action' => 'delete', $note['id']), array(), __('Are you sure you want to delete # %s?', $note['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Note'), array('controller' => 'notes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Notifications'); ?></h3>
	<?php if (!empty($job['Notification'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Job Id'); ?></th>
		<th><?php echo __('Pa'); ?></th>
		<th><?php echo __('Js'); ?></th>
		<th><?php echo __('Dn'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($job['Notification'] as $notification): ?>
		<tr>
			<td><?php echo $notification['id']; ?></td>
			<td><?php echo $notification['job_id']; ?></td>
			<td><?php echo $notification['pa']; ?></td>
			<td><?php echo $notification['js']; ?></td>
			<td><?php echo $notification['dn']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'notifications', 'action' => 'view', $notification['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'notifications', 'action' => 'edit', $notification['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'notifications', 'action' => 'delete', $notification['id']), array(), __('Are you sure you want to delete # %s?', $notification['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Notification'), array('controller' => 'notifications', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Uploads'); ?></h3>
	<?php if (!empty($job['Upload'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Is Accepted'); ?></th>
		<th><?php echo __('Filesize'); ?></th>
		<th><?php echo __('Path'); ?></th>
		<th><?php echo __('Job Id'); ?></th>
		<th><?php echo __('Capnumber'); ?></th>
		<th><?php echo __('Uploadtype Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($job['Upload'] as $upload): ?>
		<tr>
			<td><?php echo $upload['id']; ?></td>
			<td><?php echo $upload['type']; ?></td>
			<td><?php echo $upload['name']; ?></td>
			<td><?php echo $upload['is_accepted']; ?></td>
			<td><?php echo $upload['filesize']; ?></td>
			<td><?php echo $upload['path']; ?></td>
			<td><?php echo $upload['job_id']; ?></td>
			<td><?php echo $upload['capnumber']; ?></td>
			<td><?php echo $upload['uploadtype_id']; ?></td>
			<td><?php echo $upload['created']; ?></td>
			<td><?php echo $upload['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'uploads', 'action' => 'view', $upload['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'uploads', 'action' => 'edit', $upload['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'uploads', 'action' => 'delete', $upload['id']), array(), __('Are you sure you want to delete # %s?', $upload['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Upload'), array('controller' => 'uploads', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
