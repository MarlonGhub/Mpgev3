<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$loc = ROOT;
$tokens = explode('/', $loc);
$app = $tokens[sizeof($tokens)-1];
$app_path = Router::url('/');

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

	<?php
		

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('style');
		echo $this->Html->css('bootstrap-theme.min');
		echo $this->Html->css('jquery.datetimepicker');
		echo $this->HTml->css('style.override');

		echo $this->Html->script('jquery-1.11.0.min');
        echo $this->Html->script('jquery.datetimepicker');
		echo $this->Html->script('bootstrap.min');
        echo $this->Html->script('code39');
        echo $this->Html->script('sitewide');

		
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

	<!--[if lt IE 9]>
	  <?php echo $this->Html->script('html5shiv.min'); ?>
	  <?php echo $this->Html->script('respond.min'); ?>
	<![endif]-->
	
</head>
<body>
	
	<div id="container">

		<div id="content">
			<?php echo $this->Element('navigation'); ?>
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		</div>
	</div>
</body>
</html>
