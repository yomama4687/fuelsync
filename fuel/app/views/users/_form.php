<?php echo Form::open(array('class' => 'form-stacked')); ?>

	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('アカウント名', 'username'); ?>

			<div class="input">
				<?php echo Form::input('username', Input::post('username', isset($user) ? $user->username : ''), array('class' => 'col_6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('パスワード(暗号化)', 'password'); ?>

			<div class="input">
				<?php echo Form::input('password', Input::post('password', isset($user) ? $user->password : ''), array('class' => 'col_6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('権限グループ', 'group'); ?>

			<div class="input">
				<?php echo Form::input('group', Input::post('group', isset($user) ? $user->group : ''), array('class' => 'col_6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('メールアドレス', 'email'); ?>

			<div class="input">
				<?php echo Form::input('email', Input::post('email', isset($user) ? $user->email : ''), array('class' => 'col_6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('前回ログイン日時', 'last_login'); ?>

			<div class="input">
				<?php echo Form::input('last_login', Input::post('last_login', isset($user) ? $user->last_login : ''), array('class' => 'col_6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('ログイン特定キー', 'login_hash'); ?>

			<div class="input">
				<?php echo Form::input('login_hash', Input::post('login_hash', isset($user) ? $user->login_hash : ''), array('class' => 'col_6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('プロフィール属性', 'profile_fields'); ?>

			<div class="input">
				<?php echo Form::textarea('profile_fields', Input::post('profile_fields', isset($user) ? $user->profile_fields : ''), array('class' => 'col_10', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('姓', 'last_name'); ?>

			<div class="input">
				<?php echo Form::input('last_name', Input::post('last_name', isset($user) ? $user->last_name : ''), array('class' => 'col_6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('名', 'first_name'); ?>

			<div class="input">
				<?php echo Form::input('first_name', Input::post('first_name', isset($user) ? $user->first_name : ''), array('class' => 'col_6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('姓(カナ)', 'last_name_kana'); ?>

			<div class="input">
				<?php echo Form::input('last_name_kana', Input::post('last_name_kana', isset($user) ? $user->last_name_kana : ''), array('class' => 'col_6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('名(カナ)', 'first_name_kana'); ?>

			<div class="input">
				<?php echo Form::input('first_name_kana', Input::post('first_name_kana', isset($user) ? $user->first_name_kana : ''), array('class' => 'col_6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('会社名', 'company_name'); ?>

			<div class="input">
				<?php echo Form::input('company_name', Input::post('company_name', isset($user) ? $user->company_name : ''), array('class' => 'col_6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('所属名', 'dept_name'); ?>

			<div class="input">
				<?php echo Form::input('dept_name', Input::post('dept_name', isset($user) ? $user->dept_name : ''), array('class' => 'col_6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('電話番号', 'phone'); ?>

			<div class="input">
				<?php echo Form::input('phone', Input::post('phone', isset($user) ? $user->phone : ''), array('class' => 'col_6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('FAX番号', 'fax'); ?>

			<div class="input">
				<?php echo Form::input('fax', Input::post('fax', isset($user) ? $user->fax : ''), array('class' => 'col_6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('生年月日', 'birthday'); ?>

			<div class="input">
				<?php echo Form::input('birthday', Input::post('birthday', isset($user) ? $user->birthday : ''), array('class' => 'col_6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('住所ID', 'address_id'); ?>

			<div class="input">
				<?php echo Form::input('address_id', Input::post('address_id', isset($user) ? $user->address_id : ''), array('class' => 'col_6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('住所ID(お届け先)', 'address_id_4_shipping'); ?>

			<div class="input">
				<?php echo Form::input('address_id_4_shipping', Input::post('address_id_4_shipping', isset($user) ? $user->address_id_4_shipping : ''), array('class' => 'col_6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('OS', 'attr1'); ?>

			<div class="input">
				<?php echo Form::input('attr1', Input::post('attr1', isset($user) ? $user->attr1 : ''), array('class' => 'col_6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('EXCELバージョン', 'attr2'); ?>

			<div class="input">
				<?php echo Form::input('attr2', Input::post('attr2', isset($user) ? $user->attr2 : ''), array('class' => 'col_6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('SKYPE有無', 'attr3'); ?>

			<div class="input">
				<?php echo Form::input('attr3', Input::post('attr3', isset($user) ? $user->attr3 : ''), array('class' => 'col_6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('仕入業務有無', 'attr4'); ?>

			<div class="input">
				<?php echo Form::input('attr4', Input::post('attr4', isset($user) ? $user->attr4 : ''), array('class' => 'col_6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('予備5', 'attr5'); ?>

			<div class="input">
				<?php echo Form::input('attr5', Input::post('attr5', isset($user) ? $user->attr5 : ''), array('class' => 'col_6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('予備6', 'attr6'); ?>

			<div class="input">
				<?php echo Form::input('attr6', Input::post('attr6', isset($user) ? $user->attr6 : ''), array('class' => 'col_6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('予備7', 'attr7'); ?>

			<div class="input">
				<?php echo Form::input('attr7', Input::post('attr7', isset($user) ? $user->attr7 : ''), array('class' => 'col_6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('予備8', 'attr8'); ?>

			<div class="input">
				<?php echo Form::input('attr8', Input::post('attr8', isset($user) ? $user->attr8 : ''), array('class' => 'col_6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('予備9', 'attr9'); ?>

			<div class="input">
				<?php echo Form::input('attr9', Input::post('attr9', isset($user) ? $user->attr9 : ''), array('class' => 'col_6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('予備10', 'attr10'); ?>

			<div class="input">
				<?php echo Form::input('attr10', Input::post('attr10', isset($user) ? $user->attr10 : ''), array('class' => 'col_6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('有効開始日時', 'start_date'); ?>

			<div class="input">
				<?php echo Form::input('start_date', Input::post('start_date', isset($user) ? $user->start_date : ''), array('class' => 'col_6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('有効終了日時', 'end_date'); ?>

			<div class="input">
				<?php echo Form::input('end_date', Input::post('end_date', isset($user) ? $user->end_date : ''), array('class' => 'col_6')); ?>

			</div>
		</div>
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'medium green')); ?>

		</div>
	</fieldset>
<?php echo Form::close(); ?>