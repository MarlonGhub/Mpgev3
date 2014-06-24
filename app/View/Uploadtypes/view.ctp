<div class="uploadtypes view">
<h2><?php echo __('Uploadtype'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($uploadtype['Uploadtype']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($uploadtype['Uploadtype']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($uploadtype['Uploadtype']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($uploadtype['Uploadtype']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Uploadtype'), array('action' => 'edit', $uploadtype['Uploadtype']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Uploadtype'), array('action' => 'delete', $uploadtype['Uploadtype']['id']), array(), __('Are you sure you want to delete # %s?', $uploadtype['Uploadtype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Uploadtypes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uploadtype'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Uploads'), array('controller' => 'uploads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upload'), array('controller' => 'uploads', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Uploads'); ?></h3>
	<?php if (!empty($uploadtype['Upload'])): ?>
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
	<?php foreach ($uploadtype['Upload'] as $upload): ?>
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
