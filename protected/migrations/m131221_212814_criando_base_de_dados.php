<?php

class m131221_212814_criando_base_de_dados extends CDbMigration
{
	public function up()
	{
                $this->createTable('tbl_pessoa', 
                    array(
                        'cpf'                       => 'CHAR(11) NOT NULL',
                        'nome'                      => 'VARCHAR(45) NOT NULL',
                        'sobrenome'                 => 'VARCHAR(45) NOT NULL',
                        'estado_civil'              => 'VARCHAR(10) NOT NULL',
                        'dt_nascimento'             => 'DATE NOT NULL',
                        'sexo'                      => 'CHAR(1) NOT NULL',
                        'naturalidade_municipio'    => 'VARCHAR(45) NOT NULL',
                        'naturalidade_uf'           => 'CHAR(2) NOT NULL',
                        'nacionalidade'             => 'VARCHAR(45) NOT NULL',
                        'rg'                        => 'VARCHAR(15) NOT NULL',
                        'data_emissao_rg'           => 'DATE NOT NULL',
                        'orgao_emissor_rg'          => 'VARCHAR(10) NOT NULL',
                        'cod_titulo_eleitor'        => 'VARCHAR(12) NOT NULL',
                        'PRIMARY KEY (`cpf`)'
                ),'ENGINE=InnoDB DEFAULT CHARSET=utf8');
                
                $this->createTable('tbl_endereco', 
                    array(
                        'cpf'           => 'CHAR(11) NOT NULL',
                        'cep'           => 'CHAR(8) NOT NULL',
                        'tipo_endereco' => 'VARCHAR(15) NOT NULL',
                        'logradouro'    => 'VARCHAR(45) NOT NULL',
                        'numero'        => 'SMALLINT(6) UNSIGNED NOT NULL',
                        'complemento'   => 'VARCHAR(25) NULL',
                        'bairro'        => 'VARCHAR(45) NOT NULL',
                        'cidade'        => 'VARCHAR(45) NOT NULL',
                        'uf'            => 'CHAR(2) NOT NULL',
                        'PRIMARY KEY (`cpf`)'
                ),'ENGINE=InnoDB DEFAULT CHARSET=utf8');
                
                $this->createTable('tbl_telefone', 
                    array(
                        'cpf'               => 'CHAR(11) NOT NULL',
                        'cod_area_telefone' => 'TINYINT(2) UNSIGNED NOT NULL',
                        'numero_telefone'   => 'INT(9) UNSIGNED NOT NULL',
                        'tipo_telefone'     => 'VARCHAR(15) NOT NULL',
                        'PRIMARY KEY (`cpf`)'
                ),'ENGINE=InnoDB DEFAULT CHARSET=utf8');
                
                $this->createTable('tbl_funcionario', 
                    array(
                        'cpf'                   => 'CHAR(11) NOT NULL',
                        'registro_funcional'    => 'VARCHAR(10) NOT NULL',
                        'data_admissao'         => 'DATE NULL',
                        'PRIMARY KEY (`cpf`)'
                ),'ENGINE=InnoDB DEFAULT CHARSET=utf8');
                
                $this->createTable('tbl_professor', 
                    array(
                        'cpf'                   => 'CHAR(11) NOT NULL',
                        'registro_funcional'    => 'VARCHAR(10) NOT NULL',
                        'data_admissao'         => 'DATE NULL',
                        'coordenador'           => 'TINYINT(1) UNSIGNED NULL',
                        'PRIMARY KEY (`cpf`)'
                ),'ENGINE=InnoDB DEFAULT CHARSET=utf8');
                
                $this->createTable('tbl_aluno', 
                    array(
                        'cpf'                   => 'CHAR(11) NOT NULL',
                        'cod_matricula'         => 'VARCHAR(10) NOT NULL',
                        'data_vestibular'       => 'DATE NULL',
                        'pontos_vestibular'     => 'SMALLINT(3) UNSIGNED NULL',
                        'data_ultima_matricula' => 'DATE NULL',
                        'classificacao'         => 'SMALLINT(3) NULL',
                        'forma_ingresso'        => 'VARCHAR(45) NULL',
                        'escolaridade'          => 'VARCHAR(45) NULL',
                        'segundo_grau'          => 'TINYINT(1) NULL',
                        'universitario'         => 'TINYINT(1) NULL',
                        'estabelecimento'       => 'VARCHAR(45) NULL',
                        'sede'                  => 'VARCHAR(45) NULL',
                        'estado'                => 'CHAR(2) NULL',
                        'conclusao'             => 'DATE NULL',
                        'PRIMARY KEY (`cpf`)'
                ),'ENGINE=InnoDB DEFAULT CHARSET=utf8');
                
                $this->createTable('tbl_documento',
                    array(
                        'cod_documento'         => 'SMALLINT(3) UNSIGNED NOT NULL',
                        'descricao_documento'   => 'TEXT NOT NULL',
                        'prazo_medio_documento' => 'SMALLINT(3) UNSIGNED NOT NULL',
                        'PRIMARY KEY (`cod_documento`)'
                ),'ENGINE=InnoDB DEFAULT CHARSET=utf8');
                
                $this->createTable('tbl_requisicao',
                    array(
                        'cod_requisicao'            => 'INT(10) UNSIGNED NOT NULL',
                        'cod_documento'             => 'SMALLINT(3) UNSIGNED NOT NULL',
                        'cod_matricula'             => 'VARCHAR(10) NOT NULL',
                        'registro_funcional'        => 'VARCHAR(10) NOT NULL',
                        'data_inicio_requisicao'    => 'DATETIME NOT NULL',
                        'data_fim_requisicao'       => 'DATETIME NULL',
                        'quantidade_documento'      => 'TINYINT(2) UNSIGNED NOT NULL',
                        'observacao_requisicao'     => 'TEXT NULL',
                        'PRIMARY KEY (`cod_requisicao`)'
                ),'ENGINE=InnoDB DEFAULT CHARSET=utf8');
                
                $this->createTable('tbl_disciplina', 
                    array(
                        'cod_disciplina'            => 'MEDIUMINT(6) UNSIGNED NOT NULL',
                        'nome_disciplina'           => 'VARCHAR(45) NOT NULL',
                        'sigla_disciplina'          => 'VARCHAR(15) NOT NULL',
                        'descricao_disciplina'      => 'TEXT NULL',
                        'PRIMARY KEY (`cod_disciplina`)'
                ),'ENGINE=InnoDB DEFAULT CHARSET=utf8');
                
                $this->createTable('tbl_curso',
                    array(
                        'cod_curso'         => 'SMALLINT(3) UNSIGNED NOT NULL',
                        'nome_curso'        => 'VARCHAR(45) NOT NULL',
                        'sigla_curso'       => 'VARCHAR(15) NOT NULL',
                        'descricao_curso'   => 'TEXT NOT NULL',
                        'duracao_curso'     => 'SMALLINT(3) UNSIGNED NOT NULL',
                        'PRIMARY KEY (`cod_curso`)'
                ),'ENGINE=InnoDB DEFAULT CHARSET=utf8');
                
                $this->createTable('tbl_vinculo_disciplina', 
                    array(
                        'cod_vinculo_disciplina'    => 'MEDIUMINT(6) UNSIGNED NOT NULL',
                        'cod_disciplina'            => 'MEDIUMINT(6) UNSIGNED NOT NULL',
                        'cod_curso'                 => 'SMALLINT(3) UNSIGNED NOT NULL',
                        'registro_funcional'        => 'VARCHAR(10) NOT NULL',
                        'periodo'                   => 'VARCHAR(10) NOT NULL',
                        'semestre'                  => 'TINYINT(1) UNSIGNED NOT NULL',
                        'ano'                       => 'YEAR NOT NULL',
                        'carga_horaria'             => 'SMALLINT(3) UNSIGNED NOT NULL',
                        'PRIMARY KEY (`cod_vinculo_disciplina`, `cod_disciplina`, `cod_curso`, `registro_funcional`)'
                ),'ENGINE=InnoDB DEFAULT CHARSET=utf8');
                
                $this->createTable('tbl_vinculo_disciplina_aluno', 
                    array(
                        'cod_vinculo_disciplina'    => 'MEDIUMINT(6) UNSIGNED NOT NULL',
                        'cod_matricula'             => 'VARCHAR(10) NOT NULL',
                        'nota_p1'                   => 'FLOAT UNSIGNED NULL',
                        'nota_p2'                   => 'FLOAT UNSIGNED NULL',
                        'nota_p3'                   => 'FLOAT UNSIGNED NULL',
                        'media_semestre'            => 'FLOAT UNSIGNED NULL',
                        'PRIMARY KEY (`cod_vinculo_disciplina`, `cod_matricula`)'
                ),'ENGINE=InnoDB DEFAULT CHARSET=utf8');
                
                
                $this->createTable('tbl_vinculo_disciplina_horario',
                    array(
                        'cod_vinculo_disciplina'    => 'MEDIUMINT(6) UNSIGNED NOT NULL',
                        'horario_inicio'            => 'TIME NOT NULL',
                        'dia_semana'                => 'VARCHAR(15) NOT NULL',
                        'PRIMARY KEY (`cod_vinculo_disciplina`)'
                ),'ENGINE=InnoDB DEFAULT CHARSET=utf8');

	}

	public function down()
	{
                $this->dropTable('tbl_pessoa');
                $this->dropTable('tbl_endereco');
                $this->dropTable('tbl_telefone');
                $this->dropTable('tbl_funcionario');
                $this->dropTable('tbl_professor');
                $this->dropTable('tbl_aluno');
                $this->dropTable('tbl_documento');
                $this->dropTable('tbl_requisicao');
                $this->dropTable('tbl_disciplina');
                $this->dropTable('tbl_curso');
                $this->dropTable('tbl_vinculo_disciplina');
                $this->dropTable('tbl_vinculo_disciplina_aluno');
                $this->dropTable('tbl_vinculo_disciplina_horario');
	}
}