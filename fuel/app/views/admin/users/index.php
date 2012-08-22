<h2>Listing Users</h2>
<br>
<?php if ($users): ?>
<table class="zebra-striped">
	<thead>
		<tr>
			<th>Username</th>
			<th>Password</th>
			<th>Group</th>
			<th>Email</th>
			<th>Last login</th>
			<th>Login hash</th>
			<th>Profile fields</th>
			<th>First name</th>
			<th>Last name</th>
			<th>First name kana</th>
			<th>Last name kana</th>
			<th>Company name</th>
			<th>Dept name</th>
			<th>Phone</th>
			<th>Fax</th>
			<th>Birthday</th>
			<th>Address id</th>
			<th>Address id 4 shipping</th>
			<th>Attr1</th>
			<th>Attr2</th>
			<th>Attr3</th>
			<th>Attr4</th>
			<th>Attr5</th>
			<th>Attr6</th>
			<th>Attr7</th>
			<th>Attr8</th>
			<th>Attr9</th>
			<th>Attr10</th>
			<th>Start date</th>
			<th>End date</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($users as $user): ?>		<tr>

			<td><?php echo $user->username; ?></td>
			<td><?php echo $user->password; ?></td>
			<td><?php echo $user->group; ?></td>
			<td><?php echo $user->email; ?></td>
			<td><?php echo $user->last_login; ?></td>
			<td><?php echo $user->login_hash; ?></td>
			<td><?php echo $user->profile_fields; ?></td>
			<td><?php echo $user->first_name; ?></td>
			<td><?php echo $user->last_name; ?></td>
			<td><?php echo $user->first_name_kana; ?></td>
			<td><?php echo $user->last_name_kana; ?></td>
			<td><?php echo $user->company_name; ?></td>
			<td><?php echo $user->dept_name; ?></td>
			<td><?php echo $user->phone; ?></td>
			<td><?php echo $user->fax; ?></td>
			<td><?php echo $user->birthday; ?></td>
			<td><?php echo $user->address_id; ?></td>
			<td><?php echo $user->address_id_4_shipping; ?></td>
			<td><?php echo $user->attr1; ?></td>
			<td><?php echo $user->attr2; ?></td>
			<td><?php echo $user->attr3; ?></td>
			<td><?php echo $user->attr4; ?></td>
			<td><?php echo $user->attr5; ?></td>
			<td><?php echo $user->attr6; ?></td>
			<td><?php echo $user->attr7; ?></td>
			<td><?php echo $user->attr8; ?></td>
			<td><?php echo $user->attr9; ?></td>
			<td><?php echo $user->attr10; ?></td>
			<td><?php echo $user->start_date; ?></td>
			<td><?php echo $user->end_date; ?></td>
			<td>
				<?php echo Html::anchor('admin/users/view/'.$user->id, 'View'); ?> |
				<?php echo Html::anchor('admin/users/edit/'.$user->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/users/delete/'.$user->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Users.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/users/create', 'Add new User', array('class' => 'btn success')); ?>

</p>
