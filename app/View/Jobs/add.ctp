<?php
    $app_path = Router::url('/');

?>
<script>
    $(document).ready(function() {
        //BEGIN DATEPICKER LOGIC
        $(':input[name=JobDuedate]').change(function(){
            if ($(this.val().match(/^Sa/gi)))
            {
               $(this).css('border-color', 'red');
               alert('test');
               console.log('Due Date lands on Saturday.  Extra fees may apply.'); 
            } else {
            }
        });
        //END DATEPICKER LOGIC
    });
</script>
<div class="jobs form">
<?php echo $this->Form->create('Job'); ?>
	<fieldset>
		<legend><?php echo __('Add Job'); ?></legend>
	<?php
		//echo $this->Form->input('capnumber');
		echo $this->Form->input('name');
		echo $this->Form->input('pgeid', array('type' => 'text'));
        echo $this->Form->input('duedate', array('class' => 'datepicker', 'type' => 'text', 'div' => false));//, 'label' => false, 'value' => $job['Job']['duedate']));
		//echo $this->Form->input('duedate');
		echo $this->Form->input('qty');
		//echo $this->Form->input('user_id');
		echo $this->Form->input('jobtype_id');
		echo $this->Form->input('envelope_id');
        echo $this->Form->input('note', array('type' => 'textarea'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Jobs'), array('action' => 'index')); ?></li>
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
