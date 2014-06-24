<div class="emailgroupsUsers view">
<h2><?php echo __('Emailgroups User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($emailgroupsUser['EmailgroupsUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($emailgroupsUser['User']['name'], array('controller' => 'users', 'action' => 'view', $emailgroupsUser['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emailgroup'); ?></dt>
		<dd>
			<?php echo $this->Html->link($emailgroupsUser['Emailgroup']['name'], array('controller' => 'emailgroups', 'action' => 'view', $emailgroupsUser['Emailgroup']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Emailgroups User'), array('action' => 'edit', $emailgroupsUser['EmailgroupsUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Emailgroups User'), array('action' => 'delete', $emailgroupsUser['EmailgroupsUser']['id']), array(), __('Are you sure you want to delete # %s?', $emailgroupsUser['EmailgroupsUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Emailgroups Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Emailgroups User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Emailgroups'), array('controller' => 'emailgroups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Emailgroup'), array('controller' => 'emailgroups', 'action' => 'add')); ?> </li>
	</ul>
</div>
