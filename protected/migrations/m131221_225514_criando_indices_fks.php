<?php

class m131221_225514_criando_indices_fks extends CDbMigration
{
	public function up()
	{
            
                $this->createIndex('registro_funcional_funcionario_UNIQUE'  , 'tbl_funcionario'             , 'registro_funcional'  , true);
                $this->createIndex('cod_matricula_UNIQUE'                   , 'tbl_aluno'                   , 'cod_matricula'       , true);
                $this->createIndex('registro_funcional_professor_UNIQUE'    , 'tbl_professor'               , 'registro_funcional'  , true);
                $this->createIndex('fk_requisicao_cod_documento_idx'        , 'tbl_requisicao'              , 'cod_documento');
                $this->createIndex('fk_requisicao_cod_matricula_idx'        , 'tbl_requisicao'              , 'cod_matricula');
                $this->createIndex('fk_requisicao_registro_funcional_idx'   , 'tbl_requisicao'              , 'registro_funcional');
                $this->createIndex('fk_vd_disciplina_idx'                   , 'tbl_vinculo_disciplina'      , 'cod_disciplina');
                $this->createIndex('fk_vd_curso_idx'                        , 'tbl_vinculo_disciplina'      , 'cod_curso');
                $this->createIndex('fk_vd_registro_funcional_idx'           , 'tbl_vinculo_disciplina'      , 'registro_funcional');
                $this->createIndex('fk_vda_matricula_idx'                   , 'tbl_vinculo_disciplina_aluno', 'cod_matricula');
                
                $this->addForeignKey('fk_cpf_pessoa_aluno'          , 'tbl_aluno'                       , 'cpf'                     , 'tbl_pessoa'              , 'cpf'                     , 'CASCADE', 'CASCADE');
                $this->addForeignKey('fk_cpf_pessoa_funcionario'    , 'tbl_funcionario'                 , 'cpf'                     , 'tbl_pessoa'              , 'cpf'                     , 'CASCADE', 'CASCADE');
                $this->addForeignKey('fk_cpf_pessoa_professor'      , 'tbl_professor'                   , 'cpf'                     , 'tbl_pessoa'              , 'cpf'                     , 'CASCADE', 'CASCADE');
                $this->addForeignKey('fk_cpf_pessoa_endereco'       , 'tbl_endereco'                    , 'cpf'                     , 'tbl_pessoa'              , 'cpf'                     , 'CASCADE', 'CASCADE');
                $this->addForeignKey('fk_cpf_pessoa_telefone'       , 'tbl_telefone'                    , 'cpf'                     , 'tbl_pessoa'              , 'cpf'                     , 'CASCADE', 'CASCADE');
                $this->addForeignKey('fk_cdd_documento_requisicao'  , 'tbl_requisicao'                  , 'cod_documento'           , 'tbl_documento'           , 'cod_documento'           , 'CASCADE', 'CASCADE');
                $this->addForeignKey('fk_cdm_requisicao_aluno'      , 'tbl_requisicao'                  , 'cod_matricula'           , 'tbl_aluno'               , 'cod_matricula'           , 'CASCADE', 'CASCADE');
                $this->addForeignKey('fk_rgf_requisicao_funcionario', 'tbl_requisicao'                  , 'registro_funcional'      , 'tbl_funcionario'         , 'registro_funcional'      , 'CASCADE', 'CASCADE');
                $this->addForeignKey('fk_cdd_vd_disciplina'         , 'tbl_vinculo_disciplina'          , 'cod_disciplina'          , 'tbl_disciplina'          , 'cod_disciplina'          , 'CASCADE', 'CASCADE');
                $this->addForeignKey('fk_cdc_vd_curso'              , 'tbl_vinculo_disciplina'          , 'cod_curso'               , 'tbl_curso'               , 'cod_curso'               , 'CASCADE', 'CASCADE');
                $this->addForeignKey('fk_rgf_vd_professor'          , 'tbl_vinculo_disciplina'          , 'registro_funcional'      , 'tbl_professor'           , 'registro_funcional'      , 'CASCADE', 'CASCADE');
                $this->addForeignKey('fk_cdm_vda_aluno'             , 'tbl_vinculo_disciplina_aluno'    , 'cod_matricula'           , 'tbl_aluno'               , 'cod_matricula'           , 'CASCADE', 'CASCADE');
                $this->addForeignKey('fk_cvd_vda_vd'                , 'tbl_vinculo_disciplina_aluno'    , 'cod_vinculo_disciplina'  , 'tbl_vinculo_disciplina'  , 'cod_vinculo_disciplina'  , 'CASCADE', 'CASCADE');
                $this->addForeignKey('fk_cvd_vdh_vd'                , 'tbl_vinculo_disciplina_horario'  , 'cod_vinculo_disciplina'  , 'tbl_vinculo_disciplina'  , 'cod_vinculo_disciplina'  , 'CASCADE', 'CASCADE');
	}

	public function down()
	{
                $this->dropForeignKey('fk_cpf_pessoa_aluno'          , 'tbl_aluno');
                $this->dropForeignKey('fk_cpf_pessoa_funcionario'    , 'tbl_funcionario');
                $this->dropForeignKey('fk_cpf_pessoa_professor'      , 'tbl_professor');
                $this->dropForeignKey('fk_cpf_pessoa_endereco'       , 'tbl_endereco');
                $this->dropForeignKey('fk_cpf_pessoa_telefone'       , 'tbl_telefone');
                $this->dropForeignKey('fk_cdd_documento_requisicao'  , 'tbl_requisicao');
                $this->dropForeignKey('fk_cdm_requisicao_aluno'      , 'tbl_requisicao');
                $this->dropForeignKey('fk_rgf_requisicao_funcionario', 'tbl_requisicao');
                $this->dropForeignKey('fk_cdd_vd_disciplina'         , 'tbl_vinculo_disciplina');
                $this->dropForeignKey('fk_cdc_vd_curso'              , 'tbl_vinculo_disciplina');
                $this->dropForeignKey('fk_rgf_vd_professor'          , 'tbl_vinculo_disciplina');
                $this->dropForeignKey('fk_cdm_vda_aluno'             , 'tbl_vinculo_disciplina_aluno');
                $this->dropForeignKey('fk_cvd_vda_vd'                , 'tbl_vinculo_disciplina_aluno');
                $this->dropForeignKey('fk_cvd_vdh_vd'                , 'tbl_vinculo_disciplina_horario');
                
                $this->dropIndex('registro_funcional_funcionario_UNIQUE', 'tbl_funcionario');
                $this->dropIndex('cod_matricula_UNIQUE'                 , 'tbl_aluno');
                $this->dropIndex('registro_funcional_professor_UNIQUE'  , 'tbl_professor');
                $this->dropIndex('fk_requisicao_cod_documento_idx'      , 'tbl_requisicao');
                $this->dropIndex('fk_requisicao_cod_matricula_idx'      , 'tbl_requisicao');
                $this->dropIndex('fk_requisicao_registro_funcional_idx' , 'tbl_requisicao');
                $this->dropIndex('fk_vd_disciplina_idx'                 , 'tbl_vinculo_disciplina');
                $this->dropIndex('fk_vd_curso_idx'                      , 'tbl_vinculo_disciplina');
                $this->dropIndex('fk_vd_registro_funcional_idx'         , 'tbl_vinculo_disciplina');
                $this->dropIndex('fk_vda_matricula_idx'                 , 'tbl_vinculo_disciplina_aluno');
	}
}