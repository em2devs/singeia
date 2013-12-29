<?php
/* @var $this AlunoController */
/* @var $pessoa Pessoa */
/* @var $model Aluno */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
	'id'=>'aluno-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note"><?php echo Yii::t('app','Fields with <span class="required">*</span> are required.'); ?></p>

	<h1><?php echo Yii::t('app','Student Register'); ?></h1>
        
	<h2><?php echo Yii::t('app','Personal Data'); ?></h2>
        
        <?php echo $form->errorSummary($pessoa); ?>
        
	<div class="row">
		<?php echo $form->labelEx($pessoa,'cpf'); ?>
		<?php echo $form->textField($pessoa,'cpf',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($pessoa,'cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pessoa,'nome'); ?>
		<?php echo $form->textField($pessoa,'nome',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($pessoa,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pessoa,'sobrenome'); ?>
		<?php echo $form->textField($pessoa,'sobrenome',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($pessoa,'sobrenome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pessoa,'estado_civil'); ?>
		<?php echo $form->textField($pessoa,'estado_civil',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($pessoa,'estado_civil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pessoa,'dt_nascimento'); ?>
		<?php echo $form->textField($pessoa,'dt_nascimento'); ?>
		<?php echo $form->error($pessoa,'dt_nascimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pessoa,'sexo'); ?>
		<?php echo $form->textField($pessoa,'sexo',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($pessoa,'sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pessoa,'naturalidade_municipio'); ?>
		<?php echo $form->textField($pessoa,'naturalidade_municipio',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($pessoa,'naturalidade_municipio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pessoa,'naturalidade_uf'); ?>
		<?php echo $form->textField($pessoa,'naturalidade_uf',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($pessoa,'naturalidade_uf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pessoa,'nacionalidade'); ?>
		<?php echo $form->textField($pessoa,'nacionalidade',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($pessoa,'nacionalidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pessoa,'rg'); ?>
		<?php echo $form->textField($pessoa,'rg',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($pessoa,'rg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pessoa,'data_emissao_rg'); ?>
		<?php echo $form->textField($pessoa,'data_emissao_rg'); ?>
		<?php echo $form->error($pessoa,'data_emissao_rg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pessoa,'orgao_emissor_rg'); ?>
		<?php echo $form->textField($pessoa,'orgao_emissor_rg',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($pessoa,'orgao_emissor_rg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pessoa,'cod_titulo_eleitor'); ?>
		<?php echo $form->textField($pessoa,'cod_titulo_eleitor',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($pessoa,'cod_titulo_eleitor'); ?>
	</div>



	<h2><?php echo Yii::t('app','Student Data'); ?></h2>
        
        <?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_matricula'); ?>
		<?php echo $form->textField($model,'cod_matricula',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cod_matricula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_vestibular'); ?>
		<?php echo $form->textField($model,'data_vestibular'); ?>
		<?php echo $form->error($model,'data_vestibular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pontos_vestibular'); ?>
		<?php echo $form->textField($model,'pontos_vestibular'); ?>
		<?php echo $form->error($model,'pontos_vestibular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_ultima_matricula'); ?>
		<?php echo $form->textField($model,'data_ultima_matricula'); ?>
		<?php echo $form->error($model,'data_ultima_matricula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'classificacao'); ?>
		<?php echo $form->textField($model,'classificacao'); ?>
		<?php echo $form->error($model,'classificacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'forma_ingresso'); ?>
		<?php echo $form->textField($model,'forma_ingresso',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'forma_ingresso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'escolaridade'); ?>
		<?php echo $form->textField($model,'escolaridade',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'escolaridade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'segundo_grau'); ?>
		<?php echo $form->textField($model,'segundo_grau'); ?>
		<?php echo $form->error($model,'segundo_grau'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'universitario'); ?>
		<?php echo $form->textField($model,'universitario'); ?>
		<?php echo $form->error($model,'universitario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estabelecimento'); ?>
		<?php echo $form->textField($model,'estabelecimento',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'estabelecimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sede'); ?>
		<?php echo $form->textField($model,'sede',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'sede'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conclusao'); ?>
		<?php echo $form->textField($model,'conclusao'); ?>
		<?php echo $form->error($model,'conclusao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->