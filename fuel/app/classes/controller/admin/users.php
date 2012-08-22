<?php
class Controller_Admin_Users extends Controller_Admin 
{

	public function action_index()
	{
		$data['users'] = Model_User::find('all');
		$this->template->title = "Users";
		$this->template->content = View::forge('admin\users/index', $data);

	}

	public function action_view($id = null)
	{
		$data['user'] = Model_User::find($id);

		$this->template->title = "User";
		$this->template->content = View::forge('admin\users/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_User::validate('create');

			if ($val->run())
			{
				$user = Model_User::forge(array(
					'username' => Input::post('username'),
					'password' => Input::post('password'),
					'group' => Input::post('group'),
					'email' => Input::post('email'),
					'last_login' => Input::post('last_login'),
					'login_hash' => Input::post('login_hash'),
					'profile_fields' => Input::post('profile_fields'),
					'first_name' => Input::post('first_name'),
					'last_name' => Input::post('last_name'),
					'first_name_kana' => Input::post('first_name_kana'),
					'last_name_kana' => Input::post('last_name_kana'),
					'company_name' => Input::post('company_name'),
					'dept_name' => Input::post('dept_name'),
					'phone' => Input::post('phone'),
					'fax' => Input::post('fax'),
					'birthday' => Input::post('birthday'),
					'address_id' => Input::post('address_id'),
					'address_id_4_shipping' => Input::post('address_id_4_shipping'),
					'attr1' => Input::post('attr1'),
					'attr2' => Input::post('attr2'),
					'attr3' => Input::post('attr3'),
					'attr4' => Input::post('attr4'),
					'attr5' => Input::post('attr5'),
					'attr6' => Input::post('attr6'),
					'attr7' => Input::post('attr7'),
					'attr8' => Input::post('attr8'),
					'attr9' => Input::post('attr9'),
					'attr10' => Input::post('attr10'),
					'start_date' => Input::post('start_date'),
					'end_date' => Input::post('end_date'),
				));

				if ($user and $user->save())
				{
					Session::set_flash('success', e('Added user #'.$user->id.'.'));

					Response::redirect('admin/users');
				}

				else
				{
					Session::set_flash('error', e('Could not save user.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Users";
		$this->template->content = View::forge('admin\users/create');

	}

	public function action_edit($id = null)
	{
		$user = Model_User::find($id);
		$val = Model_User::validate('edit');

		if ($val->run())
		{
			$user->username = Input::post('username');
			$user->password = Input::post('password');
			$user->group = Input::post('group');
			$user->email = Input::post('email');
			$user->last_login = Input::post('last_login');
			$user->login_hash = Input::post('login_hash');
			$user->profile_fields = Input::post('profile_fields');
			$user->first_name = Input::post('first_name');
			$user->last_name = Input::post('last_name');
			$user->first_name_kana = Input::post('first_name_kana');
			$user->last_name_kana = Input::post('last_name_kana');
			$user->company_name = Input::post('company_name');
			$user->dept_name = Input::post('dept_name');
			$user->phone = Input::post('phone');
			$user->fax = Input::post('fax');
			$user->birthday = Input::post('birthday');
			$user->address_id = Input::post('address_id');
			$user->address_id_4_shipping = Input::post('address_id_4_shipping');
			$user->attr1 = Input::post('attr1');
			$user->attr2 = Input::post('attr2');
			$user->attr3 = Input::post('attr3');
			$user->attr4 = Input::post('attr4');
			$user->attr5 = Input::post('attr5');
			$user->attr6 = Input::post('attr6');
			$user->attr7 = Input::post('attr7');
			$user->attr8 = Input::post('attr8');
			$user->attr9 = Input::post('attr9');
			$user->attr10 = Input::post('attr10');
			$user->start_date = Input::post('start_date');
			$user->end_date = Input::post('end_date');

			if ($user->save())
			{
				Session::set_flash('success', e('Updated user #' . $id));

				Response::redirect('admin/users');
			}

			else
			{
				Session::set_flash('error', e('Could not update user #' . $id));
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
		$this->template->content = View::forge('admin\users/edit');

	}

	public function action_delete($id = null)
	{
		if ($user = Model_User::find($id))
		{
			$user->delete();

			Session::set_flash('success', e('Deleted user #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete user #'.$id));
		}

		Response::redirect('admin/users');

	}


}