<h2>Viewing #<?php echo $user->id; ?></h2>

<p>
	<strong>Username:</strong>
	<?php echo $user->username; ?></p>
<p>
	<strong>Password:</strong>
	<?php echo $user->password; ?></p>
<p>
	<strong>Group:</strong>
	<?php echo $user->group; ?></p>
<p>
	<strong>Email:</strong>
	<?php echo $user->email; ?></p>
<p>
	<strong>Last login:</strong>
	<?php echo $user->last_login; ?></p>
<p>
	<strong>Login hash:</strong>
	<?php echo $user->login_hash; ?></p>
<p>
	<strong>Profile fields:</strong>
	<?php echo $user->profile_fields; ?></p>
<p>
	<strong>First name:</strong>
	<?php echo $user->first_name; ?></p>
<p>
	<strong>Last name:</strong>
	<?php echo $user->last_name; ?></p>
<p>
	<strong>First name kana:</strong>
	<?php echo $user->first_name_kana; ?></p>
<p>
	<strong>Last name kana:</strong>
	<?php echo $user->last_name_kana; ?></p>
<p>
	<strong>Company name:</strong>
	<?php echo $user->company_name; ?></p>
<p>
	<strong>Dept name:</strong>
	<?php echo $user->dept_name; ?></p>
<p>
	<strong>Phone:</strong>
	<?php echo $user->phone; ?></p>
<p>
	<strong>Fax:</strong>
	<?php echo $user->fax; ?></p>
<p>
	<strong>Birthday:</strong>
	<?php echo $user->birthday; ?></p>
<p>
	<strong>Address id:</strong>
	<?php echo $user->address_id; ?></p>
<p>
	<strong>Address id 4 shipping:</strong>
	<?php echo $user->address_id_4_shipping; ?></p>
<p>
	<strong>Attr1:</strong>
	<?php echo $user->attr1; ?></p>
<p>
	<strong>Attr2:</strong>
	<?php echo $user->attr2; ?></p>
<p>
	<strong>Attr3:</strong>
	<?php echo $user->attr3; ?></p>
<p>
	<strong>Attr4:</strong>
	<?php echo $user->attr4; ?></p>
<p>
	<strong>Attr5:</strong>
	<?php echo $user->attr5; ?></p>
<p>
	<strong>Attr6:</strong>
	<?php echo $user->attr6; ?></p>
<p>
	<strong>Attr7:</strong>
	<?php echo $user->attr7; ?></p>
<p>
	<strong>Attr8:</strong>
	<?php echo $user->attr8; ?></p>
<p>
	<strong>Attr9:</strong>
	<?php echo $user->attr9; ?></p>
<p>
	<strong>Attr10:</strong>
	<?php echo $user->attr10; ?></p>
<p>
	<strong>Start date:</strong>
	<?php echo $user->start_date; ?></p>
<p>
	<strong>End date:</strong>
	<?php echo $user->end_date; ?></p>

<?php echo Html::anchor('users/edit/'.$user->id, 'Edit'); ?> |
<?php echo Html::anchor('users', 'Back'); ?>