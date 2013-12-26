<?php

class m131225_201719_criando_papeis_modulo_rights extends CDbMigration
{
	public function up()
	{
                $this->insert('tbl_rights_auth_item', array('name'=>'Aluno'         , 'type'=>2, 'description'=>'Aluno'         , 'bizrule'=>NULL, 'data'=>'N;'));
                $this->insert('tbl_rights_auth_item', array('name'=>'Professor'     , 'type'=>2, 'description'=>'Professor'     , 'bizrule'=>NULL, 'data'=>'N;'));
                $this->insert('tbl_rights_auth_item', array('name'=>'Funcionario'   , 'type'=>2, 'description'=>'Funcionario'   , 'bizrule'=>NULL, 'data'=>'N;'));
	}

	public function down()
	{
		$this->delete('tbl_rights_auth_item','name=:name',array(':name'=>'Aluno'));
                $this->delete('tbl_rights_auth_item','name=:name',array(':name'=>'Professor'));
                $this->delete('tbl_rights_auth_item','name=:name',array(':name'=>'Funcionario'));
	}
}