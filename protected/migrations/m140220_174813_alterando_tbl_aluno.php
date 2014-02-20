<?php

class m140220_174813_alterando_tbl_aluno extends CDbMigration
{
	public function up()
	{
                $this->dropForeignKey('fk_cpf_pessoa_aluno', 'tbl_aluno');
                $this->dropPrimaryKey('cpf', 'tbl_aluno');
                $this->addForeignKey('fk_cpf_pessoa_aluno', 'tbl_aluno', 'cpf', 'tbl_pessoa', 'cpf', 'CASCADE', 'CASCADE');
                $this->addPrimaryKey('pk_cpf_matricula_aluno', 'tbl_aluno', 'cpf, cod_matricula');
	}

	public function down()
	{
                $this->dropForeignKey('fk_cpf_pessoa_aluno', 'tbl_aluno');
                $this->dropPrimaryKey('pk_cpf_matricula_aluno', 'tbl_aluno');
                $this->addForeignKey('fk_cpf_pessoa_aluno', 'tbl_aluno', 'cpf', 'tbl_pessoa', 'cpf', 'CASCADE', 'CASCADE');
                $this->addPrimaryKey('cpf', 'tbl_aluno', 'cpf');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}