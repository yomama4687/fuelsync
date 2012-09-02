<section>
<h1>Editing User</h1>

<div class="content">
<br>

<?php echo render('users/_form'); ?>
<p>
	<?php echo Html::anchor('my/view/'.$user->id, 'View'); ?> |
	<?php echo Html::anchor('my', 'Back'); ?></p>
	
</div>
</section>