<div class="users form">
	<?php echo $this->Session->flash('auth'); ?>
	<div class="user_login">
		<?php echo $this->Form->create('User'); ?>
		    <fieldset>
		        <legend>
		            <strong style="text-shadow: 2px 2px 2px grey"><?php echo __('Please Login'); ?></strong>
		        </legend>
		        <div>
		        	<label class="center"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Username or Email</label><br/>
		        	<?php echo $this->Form->input('username',array('label' => false, 'div' => false)); ?>
		        </div><br/>
		        <div>
		        	<label class="center"><span class="glyphicon glyphicon-ok"></span>&nbsp;Password</label><br/>
		        	<?php echo $this->Form->input('password',array('label' => false, 'div' => false)); ?>
		        </div>
		    <br/>
		    </fieldset>
		<div class="col-md-12 center">
			<?php
				$options = array('label' => 'Login', 'class' => 'btn btn-primary');
				echo $this->Form->end($options);
			?>
			<div id="new_client">
				<?php echo $this->Html->link('Register Here',array('controller'=>'users','action'=>'preadd')); ?>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>