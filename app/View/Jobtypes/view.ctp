<div class="jobtypes view">
<h2><?php echo __('Jobtype'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($jobtype['Jobtype']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($jobtype['Jobtype']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Jobtype'), array('action' => 'edit', $jobtype['Jobtype']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Jobtype'), array('action' => 'delete', $jobtype['Jobtype']['id']), array(), __('Are you sure you want to delete # %s?', $jobtype['Jobtype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobtypes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobtype'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Envelopes'), array('controller' => 'envelopes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Envelope'), array('controller' => 'envelopes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Envelopes'); ?></h3>
	<?php if (!empty($jobtype['Envelope'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Jobtype Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($jobtype['Envelope'] as $envelope): ?>
		<tr>
			<td><?php echo $envelope['id']; ?></td>
			<td><?php echo $envelope['name']; ?></td>
			<td><?php echo $envelope['jobtype_id']; ?></td>
			<td><?php echo $envelope['created']; ?></td>
			<td><?php echo $envelope['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'envelopes', 'action' => 'view', $envelope['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'envelopes', 'action' => 'edit', $envelope['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'envelopes', 'action' => 'delete', $envelope['id']), array(), __('Are you sure you want to delete # %s?', $envelope['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Envelope'), array('controller' => 'envelopes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Jobs'); ?></h3>
	<?php if (!empty($jobtype['Job'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Capnumber'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th><?php echo __('Duedate'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Envelope Id'); ?></th>
		<th><?php echo __('Jobtype Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($jobtype['Job'] as $job): ?>
		<tr>
			<td><?php echo $job['id']; ?></td>
			<td><?php echo $job['capnumber']; ?></td>
			<td><?php echo $job['name']; ?></td>
			<td><?php echo $job['qty']; ?></td>
			<td><?php echo $job['duedate']; ?></td>
			<td><?php echo $job['user_id']; ?></td>
			<td><?php echo $job['envelope_id']; ?></td>
			<td><?php echo $job['jobtype_id']; ?></td>
			<td><?php echo $job['created']; ?></td>
			<td><?php echo $job['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'jobs', 'action' => 'view', $job['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'jobs', 'action' => 'edit', $job['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'jobs', 'action' => 'delete', $job['id']), array(), __('Are you sure you want to delete # %s?', $job['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
