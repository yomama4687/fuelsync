<h2>Listing Users</h2>
<br>
<?php if ($users): ?>
<table class="striped">
	<thead>
		<tr>
			<th>アカウント名</th>
			<th>パスワード(暗号化)</th>
			<th>権限グループ</th>
			<th>メールアドレス</th>
			<th>前回ログイン日時</th>
			<th>ログイン特定キー</th>
			<th>プロフィール属性</th>
			<th>姓</th>
			<th>名</th>
			<th>姓(カナ)</th>
			<th>名(カナ)</th>
			<th>会社名</th>
			<th>所属名</th>
			<th>電話番号</th>
			<th>FAX番号</th>
			<th>生年月日</th>
			<th>住所ID</th>
			<th>住所ID(お届け先)</th>
			<th>OS</th>
			<th>EXCELバージョン</th>
			<th>SKYPE有無</th>
			<th>仕入業務有無</th>
			<th>予備5</th>
			<th>予備6</th>
			<th>予備7</th>
			<th>予備8</th>
			<th>予備9</th>
			<th>予備10</th>
			<th>有効開始日時</th>
			<th>有効終了日時</th>
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
				<?php echo Html::anchor('users/view/'.$user->id, '<span class="icon gray" data-icon="v"></span>'); ?> |
				<?php echo Html::anchor('users/edit/'.$user->id, '<span class="icon gray" data-icon="7"></span>'); ?> |
				<?php echo Html::anchor('users/delete/'.$user->id, '<span class="icon gray" data-icon="m"></span>', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Users.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('users/create', 'User新規登録', array('class' => 'btn medium green')); ?>

</p>
