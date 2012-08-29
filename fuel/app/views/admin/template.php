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
	<?php echo Asset::css('my/admin.css'); ?>

	<?php echo Asset::js('jquery-1.7.2/jquery-1.7.2.min.js'); ?>
	<?php echo Asset::js('kickstart/js/prettify.js'); ?>                                   <!-- PRETTIFY -->
	<?php echo Asset::js('kickstart/js/kickstart.js'); ?>                                  <!-- KICKSTART -->
	<?php echo Asset::js('jquery.cookie/jquery.cookie.js'); ?>
	<?php echo Asset::js('jquery.query/jquery.query-2.1.7.js'); ?>
	<?php echo Asset::js('my/script.js'); ?>
</head>
<body>

	<?php if ($current_user): ?>
	
	<header id="header">
		<div class="nav">
			<nav>
				<a href="#" class="brand">WEBサイト管理</a>
				<ul class="main-menu">
	                <li class="<?php echo Uri::segment(2) == '' ? 'current' : '' ?>">
						<?php echo Html::anchor('admin', 'Dashboard') ?>
					</li>

					<?php foreach (glob(APPPATH.'classes/controller/admin/*.php') as $controller): ?>

						<?php
						$section_segment = basename($controller, '.php');
						$section_title = Inflector::humanize($section_segment);
						?>

	                <li class="<?php echo Uri::segment(2) == $section_segment ? 'current' : '' ?>">
						<?php echo Html::anchor('admin/'.$section_segment, $section_title) ?>
					</li>
					<?php endforeach; ?>
				</ul>
				<div class="current-user"><?php echo $current_user->username ?> <?php echo Html::anchor('admin/logout', 'Logout') ?></div>
			</nav>
		</div>
	</header>
	<?php endif; ?>

	
	<div id="wrap" class="clearfix">
	<div id="content">
		<div class="row">
			<div class="span12">
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
			<div class="span12">
<?php echo $content; ?>
			</div>
		</div>
		<hr/>
		<footer>
			<p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
			<p>
				<a href="http://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
				<small>Version: <?php echo e(Fuel::VERSION); ?></small>
			</p>
		</footer>
	</div>
	</div>
</body>
</html>
