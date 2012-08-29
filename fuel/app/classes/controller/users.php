<?php
class Controller_Users extends Controller_Template 
{

	public function action_index()
	{
		$data['users'] = Model_User::find('all');
		$this->template->title = "Users";
		$this->template->content = View::forge('users/index', $data);
		$this->template->side = View::forge('template_side', $data);

	}

	public function action_view($id = null)
	{
		$data['user'] = Model_User::find($id);

		is_null($id) and Response::redirect('Users');

		$this->template->title = "User";
		$this->template->content = View::forge('users/view', $data);
		$this->template->side = View::forge('template_side', $data);

	}
	
	
	public function empty_2_default($str = null, $def = null) 
	{
		return empty($str) ? $def : $str;
	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_User::validate('create');
			
			if ($val->run())
			{
				
				$id = null;
				$err_msg = null;
				
				try {
					$id = Auth::create_user(Input::post('username'), Input::post('password'), Input::post('email'), 1);
Log::info('id:'.$id);
				} catch (SimpleUserUpdateException $e) {
					switch ($e->getCode())
					{
						case 1:
							// 'Username, password and email address can\'t be empty.';
							$err_msg = 'アカウント名、ユーザー名は必須です.';
						break;
						case 2:
							// 'Email address already exists'
							$err_msg = '入力したアカウント名またはメールアドレスは登録済みです.';
						break;
						case 3:
							// 'Username already exists'
							$err_msg = '入力したアカウント名または、メールアドレスは登録済みです.';
						break;
						default :
							// 
							$err_msg = '想定外のユーザー登録エラー:'.$e;
						break;
					}
				}
				
				if ($id) 
				{
					$user = Model_User::find($id);
					
//					$user->username = $this->empty_2_default(Input::post('username'), $user->username);
//					$user->password = $this->empty_2_default(Input::post('password'), $user->password);
//					$user->group = $this->empty_2_default(Input::post('group'), $user->group);
//					$user->email = $this->empty_2_default(Input::post('email'), $user->email);
					$user->last_login = $this->empty_2_default(Input::post('last_login'), $user->last_login);
					$user->login_hash = $this->empty_2_default(Input::post('login_hash'), $user->login_hash);
					$user->profile_fields = $this->empty_2_default(Input::post('profile_fields'), $user->profile_fields);
					$user->first_name = $this->empty_2_default(Input::post('first_name'), $user->first_name);
					$user->last_name = $this->empty_2_default(Input::post('last_name'), $user->last_name);
					$user->first_name_kana = $this->empty_2_default(Input::post('first_name_kana'), $user->first_name_kana);
					$user->last_name_kana = $this->empty_2_default(Input::post('last_name_kana'), $user->last_name_kana);
					$user->company_name = $this->empty_2_default(Input::post('company_name'), $user->company_name);
					$user->dept_name = $this->empty_2_default(Input::post('dept_name'), $user->dept_name);
					$user->phone = $this->empty_2_default(Input::post('phone'), $user->phone);
					$user->fax = $this->empty_2_default(Input::post('fax'), $user->fax);
					$user->birthday = $this->empty_2_default(Input::post('birthday'), $user->birthday);
					$user->address_id = $this->empty_2_default(Input::post('address_id'), $user->address_id);
					$user->address_id_4_shipping = $this->empty_2_default(Input::post('address_id_4_shipping'), $user->address_id_4_shipping);
					$user->attr1 = $this->empty_2_default(Input::post('attr1'), $user->attr1);
					$user->attr2 = $this->empty_2_default(Input::post('attr2'), $user->attr2);
					$user->attr3 = $this->empty_2_default(Input::post('attr3'), $user->attr3);
					$user->attr4 = $this->empty_2_default(Input::post('attr4'), $user->attr4);
					$user->attr5 = $this->empty_2_default(Input::post('attr5'), $user->attr5);
					$user->attr6 = $this->empty_2_default(Input::post('attr6'), $user->attr6);
					$user->attr7 = $this->empty_2_default(Input::post('attr7'), $user->attr7);
					$user->attr8 = $this->empty_2_default(Input::post('attr8'), $user->attr8);
					$user->attr9 = $this->empty_2_default(Input::post('attr9'), $user->attr9);
					$user->attr10 = $this->empty_2_default(Input::post('attr10'), $user->attr10);
					$user->start_date = $this->empty_2_default(Input::post('start_date'), $user->start_date);
					$user->end_date = $this->empty_2_default(Input::post('end_date'), $user->end_date);

					if ($user and $user->save())
					{
						Session::set_flash('success', 'Added user #'.$user->id.'.');

						Response::redirect('users');
					}
				}
				else
				{
					Session::set_flash('error', $this->empty_2_default($err_msg, '想定外のユーザー登録エラー'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Users";
		$this->template->content = View::forge('users/create');
		$this->template->side = View::forge('template_side');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('Users');

		$user = Model_User::find($id);

		$val = Model_User::validate('edit');

		if ($val->run())
		{
			$user->username = $this->empty_2_default(Input::post('username'), $user->username);
			$user->password = $this->empty_2_default(Input::post('password'), $user->password);
			$user->group = $this->empty_2_default(Input::post('group'), $user->group);
			$user->email = $this->empty_2_default(Input::post('email'), $user->email);
			$user->last_login = $this->empty_2_default(Input::post('last_login'), $user->last_login);
			$user->login_hash = $this->empty_2_default(Input::post('login_hash'), $user->login_hash);
			$user->profile_fields = $this->empty_2_default(Input::post('profile_fields'), $user->profile_fields);
			$user->first_name = $this->empty_2_default(Input::post('first_name'), $user->first_name);
			$user->last_name = $this->empty_2_default(Input::post('last_name'), $user->last_name);
			$user->first_name_kana = $this->empty_2_default(Input::post('first_name_kana'), $user->first_name_kana);
			$user->last_name_kana = $this->empty_2_default(Input::post('last_name_kana'), $user->last_name_kana);
			$user->company_name = $this->empty_2_default(Input::post('company_name'), $user->company_name);
			$user->dept_name = $this->empty_2_default(Input::post('dept_name'), $user->dept_name);
			$user->phone = $this->empty_2_default(Input::post('phone'), $user->phone);
			$user->fax = $this->empty_2_default(Input::post('fax'), $user->fax);
			$user->birthday = $this->empty_2_default(Input::post('birthday'), $user->birthday);
			$user->address_id = $this->empty_2_default(Input::post('address_id'), $user->address_id);
			$user->address_id_4_shipping = $this->empty_2_default(Input::post('address_id_4_shipping'), $user->address_id_4_shipping);
			$user->attr1 = $this->empty_2_default(Input::post('attr1'), $user->attr1);
			$user->attr2 = $this->empty_2_default(Input::post('attr2'), $user->attr2);
			$user->attr3 = $this->empty_2_default(Input::post('attr3'), $user->attr3);
			$user->attr4 = $this->empty_2_default(Input::post('attr4'), $user->attr4);
			$user->attr5 = $this->empty_2_default(Input::post('attr5'), $user->attr5);
			$user->attr6 = $this->empty_2_default(Input::post('attr6'), $user->attr6);
			$user->attr7 = $this->empty_2_default(Input::post('attr7'), $user->attr7);
			$user->attr8 = $this->empty_2_default(Input::post('attr8'), $user->attr8);
			$user->attr9 = $this->empty_2_default(Input::post('attr9'), $user->attr9);
			$user->attr10 = $this->empty_2_default(Input::post('attr10'), $user->attr10);
			$user->start_date = $this->empty_2_default(Input::post('start_date'), $user->start_date);
			$user->end_date = $this->empty_2_default(Input::post('end_date'), $user->end_date);

			if ($user->save())
			{
				Session::set_flash('success', 'Updated user #' . $id);

				Response::redirect('users');
			}

			else
			{
				Session::set_flash('error', 'Could not update user #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$user->username = $val->validated('username');
				$user->password = $val->validated('password');
				$user->group = $val->validated('group');
				$user->email = $val->validated('email');
				$user->last_login = $val->validated('last_login');
				$user->login_hash = $val->validated('login_hash');
				$user->profile_fields = $val->validated('profile_fields');
				$user->first_name = $val->validated('first_name');
				$user->last_name = $val->validated('last_name');
				$user->first_name_kana = $val->validated('first_name_kana');
				$user->last_name_kana = $val->validated('last_name_kana');
				$user->company_name = $val->validated('company_name');
				$user->dept_name = $val->validated('dept_name');
				$user->phone = $val->validated('phone');
				$user->fax = $val->validated('fax');
				$user->birthday = $val->validated('birthday');
				$user->address_id = $val->validated('address_id');
				$user->address_id_4_shipping = $val->validated('address_id_4_shipping');
				$user->attr1 = $val->validated('attr1');
				$user->attr2 = $val->validated('attr2');
				$user->attr3 = $val->validated('attr3');
				$user->attr4 = $val->validated('attr4');
				$user->attr5 = $val->validated('attr5');
				$user->attr6 = $val->validated('attr6');
				$user->attr7 = $val->validated('attr7');
				$user->attr8 = $val->validated('attr8');
				$user->attr9 = $val->validated('attr9');
				$user->attr10 = $val->validated('attr10');
				$user->start_date = $val->validated('start_date');
				$user->end_date = $val->validated('end_date');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('user', $user, false);
		}

		$this->template->title = "Users";
		$this->template->content = View::forge('users/edit');
		$this->template->side = View::forge('template_side', $user);

	}

	public function action_delete($id = null)
	{
		if ($user = Model_User::find($id))
		{
			$user->delete();

			Session::set_flash('success', 'Deleted user #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete user #'.$id);
		}

		Response::redirect('users');

	}


}