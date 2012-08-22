<?php

namespace Fuel\Migrations;

class Create_users
{
	public function up()
	{
		\DBUtil::create_table('users', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'username' => array('constraint' => 50, 'type' => 'varchar'),
			'password' => array('constraint' => 255, 'type' => 'varchar'),
			'group' => array('constraint' => 11, 'type' => 'int'),
			'email' => array('constraint' => 255, 'type' => 'varchar'),
			'last_login' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'login_hash' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'profile_fields' => array('type' => 'text', 'null' => true),
			'last_name' => array('constraint' => 50, 'type' => 'varchar', 'null' => true),
			'first_name' => array('constraint' => 50, 'type' => 'varchar', 'null' => true),
			'last_name_kana' => array('constraint' => 50, 'type' => 'varchar', 'null' => true),
			'first_name_kana' => array('constraint' => 50, 'type' => 'varchar', 'null' => true),
			'company_name' => array('constraint' => 50, 'type' => 'varchar', 'null' => true),
			'dept_name' => array('constraint' => 50, 'type' => 'varchar', 'null' => true),
			'phone' => array('constraint' => 50, 'type' => 'varchar', 'null' => true),
			'fax' => array('constraint' => 50, 'type' => 'varchar', 'null' => true),
			'birthday' => array('type' => 'date', 'null' => true),
			'address_id' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'address_id_4_shipping' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'attr1' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'attr2' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'attr3' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'attr4' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'attr5' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'attr6' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'attr7' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'attr8' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'attr9' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'attr10' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'start_date' => array('type' => 'datetime', 'null' => true),
			'end_date' => array('type' => 'datetime', 'null' => true),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('users');
	}
}