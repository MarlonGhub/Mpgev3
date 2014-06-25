<?php
    $app_path = Router::url('/');
?>
<!--=== Content Part ===-->
<div class="container">
    <div class="row">

        <!--Begin Content-->
        <div class="col-md-12">

        	<div class="searchform">
		        <?php
		            echo $this->Form->create('Job', array('role' => 'form', 'class' => 'form-horizontal', 'url' => 
		                array_merge( 
		                    array( 'action' => 'searchjob'), $this->params['pass']
		            )));
		        ?>
		        	<div class="form-group">
						<label class="col-md-2 control-label pull-left" for="name">Enter ID to Search:</label>
						<div class="col-md-2 pull-right"><?php echo $this->Form->input('pgeid', array( 'div' => false, 'type' => 'text', 'label' => false)); ?>
						</div>
						<div class="col-md-2 pull-right">
							<?php
								echo $this->Form->submit(__('Search'), array( 'div' => false, 'class' => 'btn-sm'));
					            echo '<a href="'.$app_path.'jobs" class="btn btn-danger">Clear</a>';
					            echo $this->Form->end();
					        ?>
						</div>
					</div>
				<?php
		            /*
		            echo $this->Form->input('status', array(
		                'div' => false,
		                'multiple' => 'checkbox',
		                'options' => array(
		                    'review', 'production', 'done'
		                )
		            ));
		             */
				?>
	    	</div>

	    	<div class="clearfix"></div>

        	<!--Basic Table-->
			<div class="panel panel-grey margin-bottom-40">
				<div class="panel-heading">
					<h3 class="panel-title"><strong> Jobs</strong></h3>
				</div>
				<div class="panel-body">										
    				<table class="table table-striped table-hover table-bordered">
						<thead>
						<tr>
								<th><?php echo $this->Paginator->sort('id'); ?></th>
								<th><?php echo $this->Paginator->sort('capnumber'); ?></th>
								<th><?php echo $this->Paginator->sort('pgeid'); ?></th>
								<th><?php echo $this->Paginator->sort('name'); ?></th>
								<th><?php echo $this->Paginator->sort('qty'); ?></th>
								<th><?php echo $this->Paginator->sort('duedate'); ?></th>
								<th><?php echo $this->Paginator->sort('envelope_id'); ?></th>
								<th><?php echo $this->Paginator->sort('jobtype_id'); ?></th>
								<th><?php echo $this->Paginator->sort('created'); ?></th>
								<th><?php echo $this->Paginator->sort('modified'); ?></th>
								<th class="actions center"><?php echo __('Actions'); ?></th>
						</tr>
						</thead>
						<tbody>
							<?php foreach ($jobs as $job): ?>
								<tr>
									<td><?php echo h($job['Job']['id']); ?>&nbsp;</td>
									<td><?php echo h($job['Job']['capnumber']); ?>&nbsp;</td>
									<td><?php echo h($job['Job']['pgeid']); ?>&nbsp;</td>
									<td><?php echo h($job['Job']['name']); ?>&nbsp;</td>
									<td><?php echo h($job['Job']['qty']); ?>&nbsp;</td>
									<td><?php echo h($job['Job']['duedate']); ?>&nbsp;</td>
									<td> <?php echo $this->Html->link($job['Envelope']['name'], array('controller' => 'envelopes', 'action' => 'view', $job['Envelope']['id'])); ?> </td>
									<td> <?php echo $this->Html->link($job['Jobtype']['name'], array('controller' => 'jobtypes', 'action' => 'view', $job['Jobtype']['id'])); ?> </td>
									<td><?php echo h($job['Job']['created']); ?>&nbsp;</td>
									<td><?php echo h($job['Job']['modified']); ?>&nbsp;</td>
									<td class="actions">
										<?php echo $this->Html->link(__('View'), array('action' => 'view', $job['Job']['id'])); ?>
										<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $job['Job']['id'])); ?>
										<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $job['Job']['id']), array(), __('Are you sure you want to delete # %s?', $job['Job']['id'])); ?>
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
				</div><!-- end panel body -->
			</div>
		</div>
	</div>
</div>