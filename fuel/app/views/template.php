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
<div id="header-info"><div class="content">大家さんのための青色申告応援サイトです。経理初心者の方でも、不動産所得の青色申告が簡単に出来ます！</div></div>
<div id="wrap" class="clearfix">
	<header id="header">
		<div class="top-element">
			<div class="header-top-link"><a href="">お問い合わせ</a></div>
			<div class="header-top-link"><a href="">サイトマップ</a></div>
			<div class="header-top-search"><input type="text" name="" id="" /><a class="site-search" href="">&nbsp;</a></div>
		</div>
		<div class="content">
			<div class="content-title"></div>
			<div class="content-back"></div>
		</div>
		<div class="nav">
			<nav>
				<ul class="main-menu">
					<li class="current"><a href="">Top</a>
					</li>
					<li><a href="">ご利用ガイド</a>
					</li>
					<li><a href="">ダウンロード</a>
					</li>
					<li><a href="">ユーザー登録</a>
					</li>
					<li><a href="">サポート</a>
					</li>
					<li><a href="http://c3works.net/ooya_aoiro/top.html">よくあるご質問</a>
					</li>
					<li><a href="http://c3works.net/ooya_aoiro/supprt.html">書籍について</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<div id="content">
		<div id="main">
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
			
<?php echo $content; ?>

		</div>

		
		<div id="side">
<?php echo $side; ?>
		</div>
		<div class="clear"></div>
		
	</div>

<div class="clear"></div>

</div><!-- END WRAP -->
	
<div id="footer">
	<div class="footer-top">
		<div class="top-bg"></div>
		<div class="top-link"><a href="#top-of-page"><span class="icon midium" data-icon="~" title="Tri-up"></span>ページトップへ</a></div>
	</div>
	<div class="clear"></div>
	<div class="footer-main">
		<div class="main-box">
			<div class="content">
				<div class="header"><a href="">ご利用ガイド</a></div>
				<ul>
					<li><a href="">○○○○○</a></li>
					<li><a href="">○○○○○</a></li>
					<li><a href="">○○○○○</a></li>
				</ul>
			</div>
			<div class="content">
				<div class="header"><a href="">ダウンロード</a></div>
				<ul>
					<li><a href="">○○○○○</a></li>
					<li><a href="">○○○○○</a></li>
					<li><a href="">○○○○○</a></li>
				</ul>
			</div>
			<div class="content">
				<div class="header"><a href="">サポート</a></div>
				<ul>
					<li><a href="">○○○○○</a></li>
					<li><a href="">○○○○○</a></li>
					<li><a href="">○○○○○</a></li>
				</ul>
			</div>
			<div class="content">
				<div class="header"><a href="">よくあるご質問</a></div>
				<ul>
					<li><a href="">○○○○○</a></li>
					<li><a href="">○○○○○</a></li>
					<li><a href="">○○○○○</a></li>
				</ul>
			</div>
			<div class="clear"></div>
			<div class="content">
				<div class="header"><a href="">ユーザー登録</a></div>
			</div>
			<div class="content">
				<div class="header"><a href="">お問い合わせ</a></div>
			</div>
			<div class="content">
				<div class="header"><a href="">お知らせ</a></div>
			</div>
			<div class="content">
				<div class="header"><a href="">税制改正ニュース</a></div>
			</div>
			<div class="clear"></div>
			<div class="content">
				<div class="header"><a href="">書籍について</a></div>
			</div>
			<div class="content">
				<div class="header"><a href="">プライバシーポリシー</a></div>
			</div>
			<div class="content">
				<div class="header"><a href="">特定商取引法に基づく表示</a></div>
			</div>
			<div class="content">
				<div class="header"><a href="">サイトマップ</a></div>
			</div>
			<div class="clear"></div>
			
			<div class="copyright">
				Copyright &copy; since 2012 Creative Work Station. All rights reserved.
			</div>
		</div>
	</div>
	<div class="clear"></div>
	
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
