<?php
    $app_path = Router::url('/');
?>
<script>
    $(document).ready(function() {
        //BEGIN DATEPICKER LOGIC
        $("#act-notify1").click(function(){
            $('.notify1').removeClass('hide');
        });
        $("#act-notify2").click(function(){
            $('.notify2').removeClass('hide');
        });
        $("#act-notify3").click(function(){
            $('.notify3').removeClass('hide');
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
        <legend>Notifications</legend>
<!--Begin Notification 0 -->
        <div class="notify0">
        <table>
            <tr>
                <th class="text-center">Proof Approval</th>
                <th class="text-center">Job Shipping</th>
                <th class="text-center">Delivery Notification</th>
                <th class="text-center">User</th>
                <th>Actions</th>
            </tr>
            <tr>
                <td class="text-center"><input type="checkbox" id="Notification_pa" name="data[Notification][pa][0]" /></td>
                <td class="text-center"><input type="checkbox" id="Notification_js" name="data[Notification][js][0]" /></td>
                <td class="text-center"><input type="checkbox" id="Notification_dn" name="data[Notification][dn][0]" /></td>
                <td class="text-center">
                    <select id="data[Notification][user_id]" name="data[Notification][user_id][0]">
                        <option value=""> - Please Select a User -</option>
                        <?php
                            foreach($users as $user){
                                foreach($user as $k => $v){
                                    echo '<option value='.$k.'>'.$v.'</option>';
                                }
                            }
                        ?>
                </td>
                <td>
                    <span class="glyphicon glyphicon-plus-sign"></span>
                    <span class="glyphicon glyphicon-minus-sign"></span>
                </td>
            </tr>
        </table>
        </div>
<!-- End Notification 0 -->
<!--Begin Notification 1 -->
        <div class="notify1">
        <table>
            <tr>
                <th class="text-center">Proof Approval</th>
                <th class="text-center">Job Shipping</th>
                <th class="text-center">Delivery Notification</th>
                <th class="text-center">User</th>
                <th>Actions</th>
            </tr>
            <tr>
                <td class="text-center"><input type="checkbox" id="Notification_pa" name="data[Notification][pa][1]" /></td>
                <td class="text-center"><input type="checkbox" id="Notification_js" name="data[Notification][js][1]" /></td>
                <td class="text-center"><input type="checkbox" id="Notification_dn" name="data[Notification][dn][1]" /></td>
                <td class="text-center">
                    <select id="data[Notification][user_id]" name="data[Notification][user_id][1]">
                        <option value=""> - Please Select a User -</option>
                        <?php
                            foreach($users as $user){
                                foreach($user as $k => $v){
                                    echo '<option value='.$k.'>'.$v.'</option>';
                                }
                            }
                        ?>
                </td>
                <td>
                    <span class="glyphicon glyphicon-plus-sign"></span>
                    <span class="glyphicon glyphicon-minus-sign"></span>
                </td>
            </tr>
        </table>
        </div>
<!-- End Notification 1 -->
<!--Begin Notification 2 -->
        <div class="notify2 ">
        <table>
            <tr>
                <th class="text-center">Proof Approval</th>
                <th class="text-center">Job Shipping</th>
                <th class="text-center">Delivery Notification</th>
                <th class="text-center">User</th>
                <th>Actions</th>
            </tr>
            <tr>
                <td class="text-center"><input type="checkbox" id="Notification_pa" name="data[Notification][pa][2]" /></td>
                <td class="text-center"><input type="checkbox" id="Notification_js" name="data[Notification][js][2]" /></td>
                <td class="text-center"><input type="checkbox" id="Notification_dn" name="data[Notification][dn][2]" /></td>
                <td class="text-center">
                    <select id="data[Notification][user_id]" name="data[Notification][user_id][2]">
                        <option value=""> - Please Select a User -</option>
                        <?php
                            foreach($users as $user){
                                foreach($user as $k => $v){
                                    echo '<option value='.$k.'>'.$v.'</option>';
                                }
                            }
                        ?>
                </td>
                <td>
                    <span class="glyphicon glyphicon-plus-sign"></span>
                    <span class="glyphicon glyphicon-minus-sign"></span>
                </td>
            </tr>
        </table>
        </div>
<!-- End Notification 2 -->
<!--Begin Notification 3 -->
        <div class="notify3">
        <table>
            <tr>
                <th class="text-center">Proof Approval</th>
                <th class="text-center">Job Shipping</th>
                <th class="text-center">Delivery Notification</th>
                <th class="text-center">User</th>
                <th>Actions</th>
            </tr>
            <tr>
                <td class="text-center"><input type="checkbox" id="Notification_pa" name="data[Notification][pa][3]" /></td>
                <td class="text-center"><input type="checkbox" id="Notification_js" name="data[Notification][js][3]" /></td>
                <td class="text-center"><input type="checkbox" id="Notification_dn" name="data[Notification][dn][3]" /></td>
                <td class="text-center">
                    <select id="data[Notification][user_id]" name="data[Notification][user_id][3]">
                        <option value=""> - Please Select a User -</option>
                        <?php
                            foreach($users as $user){
                                foreach($user as $k => $v){
                                    echo '<option value='.$k.'>'.$v.'</option>';
                                }
                            }
                        ?>
                </td>
                <td>
                    <span class="glyphicon glyphicon-plus-sign"></span>
                    <span class="glyphicon glyphicon-minus-sign"></span>
                </td>
            </tr>
        </table>
        </div>
<!-- End Notification 3 -->
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
