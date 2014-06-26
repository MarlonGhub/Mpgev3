<?php
    $app_path = Router::url('/');
?>
<!--=== Content Part ===-->
<div class="container">
    <div class="row">

        <!--Begin Content-->
        <div class="col-md-12">

        	<div class="searchform" style="background-color:lightgrey; padding: 5px;">
		        <?php
		            echo $this->Form->create('Job', array('url' => 
		                array_merge( 
		                    array( 'action' => 'searchjob'), $this->params['pass']
		            )));
		        ?>
		        <label class="col-md-2" style="padding-top:8px">Search by ID: </label>
				<?php
					echo $this->Form->input('pgeid', array('class' => 'col-md-6', 'div' => false, 'type' => 'text', 'label' => false, 'style' => 'clear:none; line-height:10pt;'));
					echo $this->Form->submit(__('Search'), array( 'div' => false, 'style' => 'line-height: 23pt;'));
		            echo '<a href="'.$app_path.'jobs" class="btn btn-danger" style="line-height: 19pt; margin-top:-4px; color:white;">Clear</a>';
		            echo $this->Form->end();
		        ?>
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

	    	<div class="clearfix"></div><br/>

        	<!--Basic Table-->
			<div class="panel panel-grey margin-bottom-40">
				<div class="panel-heading">
					<h3 class="panel-title"><strong> Jobs</strong></h3>
				</div>
				<div class="panel-body">										
    				<table class="table table-striped table-hover table-bordered">
						<thead>
							<tr>
								<th class="hide"><?php echo $this->Paginator->sort('Job ID #'); ?></th>
								<th><?php echo $this->Paginator->sort('Job ID #'); ?></th>
								<th><?php echo $this->Paginator->sort('PGE Job #'); ?></th>
								<th><?php echo $this->Paginator->sort('Project Name'); ?></th>
								<th><?php echo $this->Paginator->sort('Quantity'); ?></th>
								<th><?php echo $this->Paginator->sort('Due'); ?></th>
								<th><?php echo $this->Paginator->sort('envelope_id'); ?></th>
								<th><?php echo $this->Paginator->sort('Job Type'); ?></th>
								<th><?php echo $this->Paginator->sort('Date Uploaded'); ?></th>
								<th class="hide"><?php echo $this->Paginator->sort('modified'); ?></th>
								<th class="actions center"><?php echo __('Actions'); ?></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($jobs as $job): ?>
								<tr>
									<td class="hide"><?php echo h($job['Job']['id']); ?>&nbsp;</td>
									<td><?php echo h($job['Job']['capnumber']); ?>&nbsp;</td>
									<td><?php echo h($job['Job']['pgeid']); ?>&nbsp;</td>
									<td><?php echo h($job['Job']['name']); ?>&nbsp;</td>
									<td><?php echo h($job['Job']['qty']); ?>&nbsp;</td>
									<td><?php echo h($job['Job']['duedate']); ?>&nbsp;</td>
									<td> <?php echo $this->Html->link($job['Envelope']['name'], array('controller' => 'envelopes', 'action' => 'view', $job['Envelope']['id'])); ?> </td>
									<td> <?php echo $this->Html->link($job['Jobtype']['name'], array('controller' => 'jobtypes', 'action' => 'view', $job['Jobtype']['id'])); ?> </td>
									<td><?php echo $this->Time->niceShort(h($job['Job']['created'])); ?>&nbsp;</td>
									<td class="hide"><?php echo h($job['Job']['modified']); ?>&nbsp;</td>
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