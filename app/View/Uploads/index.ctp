<div class="uploads index">
	<h2><?php echo __('Uploads'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('is_accepted'); ?></th>
			<th><?php echo $this->Paginator->sort('filesize'); ?></th>
			<th><?php echo $this->Paginator->sort('path'); ?></th>
			<th><?php echo $this->Paginator->sort('job_id'); ?></th>
			<th><?php echo $this->Paginator->sort('capnumber'); ?></th>
			<th><?php echo $this->Paginator->sort('uploadtype_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($uploads as $upload): ?>
	<tr>
		<td><?php echo h($upload['Upload']['id']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['type']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['name']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['is_accepted']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['filesize']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['path']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($upload['Job']['name'], array('controller' => 'jobs', 'action' => 'view', $upload['Job']['id'])); ?>
		</td>
		<td><?php echo h($upload['Upload']['capnumber']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($upload['Uploadtype']['name'], array('controller' => 'uploadtypes', 'action' => 'view', $upload['Uploadtype']['id'])); ?>
		</td>
		<td><?php echo h($upload['Upload']['created']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $upload['Upload']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $upload['Upload']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $upload['Upload']['id']), array(), __('Are you sure you want to delete # %s?', $upload['Upload']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Upload'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Uploadtypes'), array('controller' => 'uploadtypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uploadtype'), array('controller' => 'uploadtypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Upload File'), array('controller' => 'uploader', 'action' => 'adds/import')); ?> </li>
	</ul>
</div>
