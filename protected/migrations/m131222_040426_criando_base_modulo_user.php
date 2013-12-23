<?php

class m131222_040426_criando_base_modulo_user extends CDbMigration
{
	public function up()
	{
                $this->createTable('tbl_user', 
                    array(
                        'id'            => 'int(11) NOT NULL AUTO_INCREMENT',
                        'username'      => 'varchar(20) NOT NULL',
                        'password'      => 'varchar(128) NOT NULL',
                        'email'         => 'varchar(128) NOT NULL',
                        'activkey'      => 'varchar(128) NOT NULL DEFAULT \'\'',
                        'create_at'     => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
                        'lastvisit_at'  => 'timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\'',
                        'superuser'     => 'int(1) NOT NULL DEFAULT \'0\'',
                        'status'        => 'int(1) NOT NULL DEFAULT \'0\'',
                        'PRIMARY KEY (`id`)',
                ),'ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=3');
                
                $this->createTable('tbl_user_profiles', 
                    array(
                        'user_id'   => 'int(11) NOT NULL AUTO_INCREMENT',
                        'lastname'  => 'varchar(50) NOT NULL DEFAULT \'\'',
                        'firstname' => 'varchar(50) NOT NULL DEFAULT \'\'',
                        'PRIMARY KEY (`user_id`)'
                ),'ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=3');
                
                $this->createTable('tbl_user_profiles_fields', 
                    array(
                        'id'                => 'int(10) NOT NULL AUTO_INCREMENT',
                        'varname'           => 'varchar(50) NOT NULL',
                        'title'             => 'varchar(255) NOT NULL',
                        'field_type'        => 'varchar(50) NOT NULL',
                        'field_size'        => 'varchar(15) NOT NULL DEFAULT \'0\'',
                        'field_size_min'    => 'varchar(15) NOT NULL DEFAULT \'0\'',
                        'required'          => 'int(1) NOT NULL DEFAULT \'0\'',
                        'match'             => 'varchar(255) NOT NULL DEFAULT \'\'',
                        'range'             => 'varchar(255) NOT NULL DEFAULT \'\'',
                        'error_message'     => 'varchar(255) NOT NULL DEFAULT \'\'',
                        'other_validator'   => 'varchar(5000) NOT NULL DEFAULT \'\'',
                        'default'           => 'varchar(255) NOT NULL DEFAULT \'\'',
                        'widget'            => 'varchar(255) NOT NULL DEFAULT \'\'',
                        'widgetparams'      => 'varchar(5000) NOT NULL DEFAULT \'\'',
                        'position'          => 'int(3) NOT NULL DEFAULT \'0\'',
                        'visible'           => 'int(1) NOT NULL DEFAULT \'0\'',
                        'PRIMARY KEY (`id`)'
                ),'ENGINE=InnoDB DEFAULT CHARSET=utf8');
                
                $this->createIndex('username'   , 'tbl_user'                , 'username', true);
                $this->createIndex('email'      , 'tbl_user'                , 'email'   , true);
                $this->createIndex('status'     , 'tbl_user'                , 'status');
                $this->createIndex('superuser'  , 'tbl_user'                , 'superuser');
                $this->createIndex('varname'    , 'tbl_user_profiles_fields', 'varname,widget,visible');
                
                $this->addForeignKey('user_profile_id', 'tbl_user_profiles', 'user_id', 'tbl_user', 'id', 'CASCADE', 'NO ACTION');
                
                $this->insert('tbl_user'                , array('id'=>1     , 'username'=>'admin'   , 'password'=>'21232f297a57a5a743894a0e4a801fc3', 'email'=>'webmaster@example.com'  , 'activkey'=>'9a24eff8c15a6a141ece27eb6947da0f', 'create_at'=>'2013-12-22 02:25:01', 'lastvisit_at'=>'2013-12-22 06:33:30', 'superuser'=>1, 'status'=>1));
                $this->insert('tbl_user'                , array('id'=>2     , 'username'=>'demo'    , 'password'=>'fe01ce2a7fbac8fafaed7c982a04e229', 'email'=>'demo@example.com'       , 'activkey'=>'099f825543f7850cc038b90aaff39fac', 'create_at'=>'2013-12-22 02:25:01', 'lastvisit_at'=>'2013-12-22 05:54:51', 'superuser'=>0, 'status'=>1));
                $this->insert('tbl_user_profiles_fields', array('id'=>1     , 'varname'=>'lastname' , 'title'=>'Last Name'  , 'field_type'=>'VARCHAR', 'field_size'=>'50', 'field_size_min'=>'3', 'required'=>1, 'match'=>'', 'range'=>'', 'error_message'=>'Incorrect Last Name (length between 3 and 50 characters).' , 'other_validator'=>'', 'default'=>'', 'widget'=>'', 'widgetparams'=>'', 'position'=>1, 'visible'=>3));
                $this->insert('tbl_user_profiles_fields', array('id'=>2     , 'varname'=>'firstname', 'title'=>'First Name' , 'field_type'=>'VARCHAR', 'field_size'=>'50', 'field_size_min'=>'3', 'required'=>1, 'match'=>'', 'range'=>'', 'error_message'=>'Incorrect First Name (length between 3 and 50 characters).', 'other_validator'=>'', 'default'=>'', 'widget'=>'', 'widgetparams'=>'', 'position'=>0, 'visible'=>3));
                $this->insert('tbl_user_profiles'       , array('user_id'=>1, 'lastname'=>'Admin'   , 'firstname'=>'Administrator'));
                $this->insert('tbl_user_profiles'       , array('user_id'=>2, 'lastname'=>'Demo'    , 'firstname'=>'Demo'));
        }

	public function down()
	{
            
                $this->dropForeignKey('user_profile_id', 'tbl_user_profiles');
                
                $this->dropIndex('username'     , 'tbl_user');
                $this->dropIndex('email'        , 'tbl_user');
                $this->dropIndex('status'       , 'tbl_user');
                $this->dropIndex('superuser'    , 'tbl_user');
                $this->dropIndex('varname'      , 'tbl_user_profiles_fields');
                
                $this->dropTable('tbl_user');
                $this->dropTable('tbl_user_profiles');
                $this->dropTable('tbl_user_profiles_fields');
	}
}