<?php
class Model_User extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'username',
		'password',
		'group',
		'email',
		'last_login',
		'login_hash',
		'profile_fields',
		'last_name',
		'first_name',
		'last_name_kana',
		'first_name_kana',
		'company_name',
		'dept_name',
		'phone',
		'fax',
		'birthday',
		'address_id',
		'address_id_4_shipping',
		'attr1',
		'attr2',
		'attr3',
		'attr4',
		'attr5',
		'attr6',
		'attr7',
		'attr8',
		'attr9',
		'attr10',
		'start_date',
		'end_date',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('username', 'アカウント名', 'required|max_length[50]');
		$val->add_field('password', 'パスワード', 'required|max_length[255]');
		$val->add_field('group', '権限グループ', 'required|valid_string[numeric]');
		$val->add_field('email', 'メールアドレス', 'required|valid_email|max_length[255]');
		$val->add_field('last_login', '前回ログイン日時', 'valid_string[numeric]');
		$val->add_field('login_hash', 'ログイン特定キー', 'max_length[255]');
		$val->add_field('profile_fields', 'プロフィール属性', 'max_length[1000]');
		$val->add_field('last_name', '姓', 'max_length[50]');
		$val->add_field('first_name', '名', 'max_length[50]');
		$val->add_field('last_name_kana', '姓(カナ)', 'max_length[50]');
		$val->add_field('first_name_kana', '名(カナ)', 'max_length[50]');
		$val->add_field('company_name', '会社名', 'max_length[50]');
		$val->add_field('dept_name', '所属名', 'max_length[50]');
		$val->add_field('phone', '電話番号', 'max_length[50]');
		$val->add_field('fax', 'FAX番号', 'max_length[50]');
//		$val->add_field('birthday', '生年月日', '');
		$val->add_field('address_id', '住所ID', 'valid_string[numeric]');
		$val->add_field('address_id_4_shipping', '住所ID(お届け先)', 'valid_string[numeric]');
		$val->add_field('attr1', 'OS', 'max_length[255]');
		$val->add_field('attr2', 'EXCELバージョン', 'max_length[255]');
		$val->add_field('attr3', 'SKYPE有無', 'max_length[255]');
		$val->add_field('attr4', '仕入業務有無', 'max_length[255]');
		$val->add_field('attr5', '予備5', 'max_length[255]');
		$val->add_field('attr6', '予備6', 'max_length[255]');
		$val->add_field('attr7', '予備7', 'max_length[255]');
		$val->add_field('attr8', '予備8', 'max_length[255]');
		$val->add_field('attr9', '予備9', 'max_length[255]');
		$val->add_field('attr10', '予備10', 'max_length[255]');
		$val->add_field('start_date', '有効開始日時', 'valid_date');
//		$val->add_field('end_date', '有効終了日時', '');

		return $val;
	}

}
