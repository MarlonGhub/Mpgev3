<div class="orders form">
	<fieldset>
		<legend><?php echo __('Upload File'); ?></legend>
	<?php
		echo $this->Form->create($_FILES,array('type'=>'file'));
		echo $this->Form->file('submittedfile0');
		echo $this->Form->file('submittedfile1');
		echo $this->Form->file('submittedfile2');
		echo $this->Form->file('submittedfile3');
		echo $this->Form->file('submittedfile4');
		echo $this->Form->file('submittedfile5');
		echo $this->Form->end(__('Submit'));
	?>
	</fieldset>
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Back'), array('action' => '../../')); ?></li>
	</ul>
</div>