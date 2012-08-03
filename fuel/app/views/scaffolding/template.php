<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo $title; ?></title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width">
	<?php echo Asset::js('modernizr/modernizr-2.6.1.custom.min.js'); ?>
	<?php echo Asset::css('kickstart/css/kickstart.css'); ?>           <!-- KICKSTART -->
	<?php echo Asset::css('my/style.css'); ?>

	<?php echo Asset::js('jquery-1.7.2/jquery-1.7.2.min.js'); ?>
	<?php echo Asset::js('kickstart/js/prettify.js'); ?>                                   <!-- PRETTIFY -->
	<?php echo Asset::js('kickstart/js/kickstart.js'); ?>                                  <!-- KICKSTART -->
	<?php echo Asset::js('jquery.cookie/jquery.cookie.js'); ?>
	<?php echo Asset::js('jquery.query/jquery.query-2.1.7.js'); ?>
	<?php echo Asset::js('my/script.js'); ?>
</head>
<body>
<a id="top-of-page"></a>
	<div id="wrap" class="clearfix">
	
		<div id="content">
			<div class="col_12">
				<h1><?php echo $title; ?></h1>
				<hr>
<?php if (Session::get_flash('success')): ?>
				<div class="notice success">
					<span class="icon medium" data-icon="C"></span>
					<p>
					<?php echo implode('</p><p>', e((array) Session::get_flash('success'))); ?>
					</p>
				</div>
<?php endif; ?>
<?php if (Session::get_flash('error')): ?>
				<div class="notice error">
					<span class="icon medium" data-icon="X"></span>
					<p>
					<?php echo implode('</p><p>', e((array) Session::get_flash('error'))); ?>
					</p>
				</div>
<?php endif; ?>
			</div>
			<div class="col_12">
<?php echo $content; ?>
			</div>
		</div>
		<footer>
			<p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
			<p>
				<a href="http://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
				<small>Version: <?php echo e(Fuel::VERSION); ?></small>
			</p>
		</footer>
	</div> <!-- /container -->
</body>
</html>
