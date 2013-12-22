<?php

class m131222_040432_criando_base_modulo_rights extends CDbMigration
{
	public function up()
	{
                $this->createTable('tbl_rights', 
                    array(
                        'itemname'  => 'varchar(64)',
                        'type'      => 'int(11) NOT NULL',
                        'weight'    => 'int(11) NOT NULL',
                        'PRIMARY KEY (`itemname`)'
                ),'ENGINE=InnoDB DEFAULT CHARSET=utf8');
                
                $this->createTable('tbl_rights_auth_assignment', 
                    array(
                        'itemname'  => 'varchar(64)',
                        'userid'    => 'varchar(64)',
                        'bizrule'   => 'text',
                        'data'      => 'text',
                        'PRIMARY KEY (`itemname`,`userid`)'
                ),'ENGINE=InnoDB DEFAULT CHARSET=utf8');
                
                $this->createTable('tbl_rights_auth_item', 
                    array(
                        'name'          => 'varchar(64) NOT NULL',
                        'type'          => 'int(11) NOT NULL',
                        'description'   => 'text',
                        'bizrule'       => 'text',
                        'data'          => 'text',
                        'PRIMARY KEY (`name`)'
                ),'ENGINE=InnoDB DEFAULT CHARSET=utf8');
                
                $this->createTable('tbl_rights_auth_item_child', 
                    array(
                        'parent'    => 'varchar(64) NOT NULL',
                        'child'     => 'varchar(64) NOT NULL',
                        'PRIMARY KEY (`parent`,`child`)'
                ),'ENGINE=InnoDB DEFAULT CHARSET=utf8');
                
                $this->createIndex('tbl_rights_auth_item_child_ibfk_2', 'tbl_rights_auth_item_child', 'child');
                
                $this->addForeignKey('tbl_rights_ibfk_1'                , 'tbl_rights'                  , 'itemname', 'tbl_rights_auth_item', 'name', 'CASCADE', 'CASCADE');
                $this->addForeignKey('tbl_rights_auth_assignment_ibfk_1', 'tbl_rights_auth_assignment'  , 'itemname', 'tbl_rights_auth_item', 'name', 'CASCADE', 'CASCADE');
                $this->addForeignKey('tbl_rights_auth_item_child_ibfk_1', 'tbl_rights_auth_item_child'  , 'parent'  , 'tbl_rights_auth_item', 'name', 'CASCADE', 'CASCADE');
                $this->addForeignKey('tbl_rights_auth_item_child_ibfk_2', 'tbl_rights_auth_item_child'  , 'child'   , 'tbl_rights_auth_item', 'name', 'CASCADE', 'CASCADE');
                
                $this->insert('tbl_rights_auth_assignment'  , array('itemname'=>'Admin'     , 'userid'=>'1' , 'bizrule'=>NULL       , 'data'=>'N;'));
                $this->insert('tbl_rights_auth_item'        , array('name'=>'Admin'         , 'type'=>2     , 'description'=>NULL   , 'bizrule'=>NULL   , 'data'=>'N;'));
                $this->insert('tbl_rights_auth_item'        , array('name'=>'Authenticated' , 'type'=>2     , 'description'=>NULL   , 'bizrule'=>NULL   , 'data'=>'N;'));
                $this->insert('tbl_rights_auth_item'        , array('name'=>'Guest'         , 'type'=>2     , 'description'=>NULL   , 'bizrule'=>NULL   , 'data'=>'N;'));
	}

	public function down()
	{
		$this->dropForeignKey('tbl_rights_ibfk_1'                   , 'tbl_rights');
                $this->dropForeignKey('tbl_rights_auth_assignment_ibfk_1'   , 'tbl_rights_auth_assignment');
                $this->dropForeignKey('tbl_rights_auth_item_child_ibfk_1'   , 'tbl_rights_auth_item_child');
                $this->dropForeignKey('tbl_rights_auth_item_child_ibfk_2'   , 'tbl_rights_auth_item_child');
                
                $this->dropIndex('tbl_rights_auth_item_child_ibfk_2', 'tbl_rights_auth_item_child');
                
                $this->dropTable('tbl_rights');
                $this->dropTable('tbl_rights_auth_assignment');
                $this->dropTable('tbl_rights_auth_item');
                $this->dropTable('tbl_rights_auth_item_child');
	}
}