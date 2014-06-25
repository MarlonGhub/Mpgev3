<?php

/*
*   Spark::2014-03-06 Thurs 08:38 AM
*	   Purpose of this php block:
*		   Taken from prior code, breaks down url to track individual pages
*		   Similar to $app_path, but if a differentiation is needed between an
*		   'index' page and a 'add', 'edit', etc., then $act can be used.
*
*	   Stored old code:
*		   $app_path = Router::url('/');
*		   FULL_BASE_URL.$app_path.'products'
*/

	$location=$_SERVER['REQUEST_URI'];
	$location=strtok($location,'/');
	$cntrler=strtok('/');
	$act=strtok('/');

	//JB::2014-03-05 Wed 11:03 AM
	//Get Good URL for href
	$loc = ROOT;
	$tokens = explode('/', $loc);
	$app = $tokens[sizeof($tokens)-1];
    $app_path = Router::url('/');
	//do not merge this out!

/*
*   Twitter Bootstrap 3's navigation.ctp
*/
?>

<div class="container nav-bar col-md-12 col-sm-12 col-xs-12">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
        <?php echo $this->Html->image('pge_logo.jpg', array( 'height' => '50px'));?>

	</div><!-- close navbar-header -->

	<div class="push-down collapse navbar-collapse pull-left col-md-12 col-sm-12 col-xs-12">
		<ul class="nav navbar-nav">

		<!-- if ($this->Session->check('Auth.User')) { -->

			<li class="pull-left"><a href="<?php echo $app_path.'jobs';?>">JOBS</a></li>
			<li class="pull-left"><a href="<?php echo $app_path.'jobs/preadd';?>">UPLOAD JOB</a></li>


			<li class="pull-right"><?php echo $this->Html->link('SIGN OUT', array('controller'=>'users', 'action'=>'logout'));?></li>
            <li class="pull-right"><a class="dropdown" data-toggle="dropdown" href="#">ADMIN</a>
				<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
					<span class="glyphicon glyphicon-earphone"></span>&nbsp;User Info<br/>
					<?php echo $this->Html->link('Users', array('controller'=>'users', 'action'=>'index', 'plugin'=>'')); ?><br/>
					<?php echo $this->Html->link('New User', array('controller'=>'users', 'action'=>'add', 'plugin'=>'')); ?><br/>
					<?php echo $this->Html->link('Contacts', array('controller'=>'contacts', 'action'=>'index', 'plugin'=>'')); ?><br/>
					<?php echo $this->Html->link('Email Groups', array('controller'=>'emailgroups', 'action'=>'index', 'plugin'=>'')); ?><br/>
				</ul>
			</li>

		<?php //} ?>

		</ul><!-- close ul nav -->

	</div><!--close div navbar-collapse-->

</div><!--close div container -->
