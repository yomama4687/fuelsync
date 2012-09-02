<section>
<h1>Listing <?php echo \Str::ucfirst($plural_name); ?></h1>
<div class="content">

<br>
<?php echo "<?php if (\${$plural_name}): ?>"; ?>

<table class="striped">
	<thead>
		<tr>
<?php foreach ($fields as $field): ?>
			<th><?php echo \Inflector::humanize($field['name']); ?></th>
<?php endforeach; ?>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php echo '<?php'; ?> foreach ($<?php echo $plural_name; ?> as $<?php echo $singular_name; ?>): <?php echo '?>'; ?>
		<tr>

<?php foreach ($fields as $field): ?>
			<td><?php echo '<?php'; ?> echo $<?php echo $singular_name.'->'.$field['name']; ?>; <?php echo '?>'; ?></td>
<?php endforeach; ?>
			<td>
				<?php echo '<?php'; ?> echo Html::anchor('<?php echo $uri; ?>/view/'.$<?php echo $singular_name; ?>->id, '<span class="icon gray" data-icon="v"></span>'); <?php echo '?>'; ?> |
				<?php echo '<?php'; ?> echo Html::anchor('<?php echo $uri; ?>/edit/'.$<?php echo $singular_name; ?>->id, '<span class="icon gray" data-icon="7"></span>'); <?php echo '?>'; ?> |
				<?php echo '<?php'; ?> echo Html::anchor('<?php echo $uri; ?>/delete/'.$<?php echo $singular_name; ?>->id, '<span class="icon gray" data-icon="m"></span>', array('onclick' => "return confirm('Are you sure?')")); <?php echo '?>'; ?>


			</td>
		</tr>
<?php echo '<?php endforeach; ?>'; ?>
	</tbody>
</table>

<?php echo '<?php else: ?>'; ?>

<p>No <?php echo \Str::ucfirst($plural_name); ?>.</p>

<?php echo '<?php endif; ?>'; ?>
<p>
	<?php echo '<?php'; ?> echo Html::anchor('<?php echo $uri; ?>/create', '<?php echo \Inflector::humanize($singular_name); ?>新規登録', array('class' => 'btn medium green')); <?php echo '?>'; ?>


</p>
</div>
</section>