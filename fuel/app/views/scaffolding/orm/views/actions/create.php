<section>
<h1>New <?php echo \Str::ucfirst($singular_name); ?></h1>
<div class="content">

<br>

<?php echo '<?php'; ?> echo render('<?php echo $view_path ?>/_form'); ?>


<p><?php echo '<?php'; ?> echo Html::anchor('<?php echo $uri ?>', 'Back'); <?php echo '?>'; ?></p>

</div>
</section>