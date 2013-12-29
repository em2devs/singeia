<?php
/* @var $this AlunoController */
/* @var $model Aluno */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
	'id'=>'aluno-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?php echo Yii::t('app','Fields with <span class="required">*</span> are required.'); ?></p>

	<h1><?php echo Yii::t('app','Student Register'); ?></h1>
	
	<h2><?php echo Yii::t('app','Personal Data'); ?></h2>

	<div class="row">
		<?php echo $form->labelEx($Pessoa,'cpf'); ?>
		<?php echo $form->textField($Pessoa,'cpf',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($Pessoa,'cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Pessoa,'nome'); ?>
		<?php echo $form->textField($Pessoa,'nome',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($Pessoa,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Pessoa,'sobrenome'); ?>
		<?php echo $form->textField($Pessoa,'sobrenome',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($Pessoa,'sobrenome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Pessoa,'estado_civil'); ?>
		<?php echo $form->textField($Pessoa,'estado_civil',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($Pessoa,'estado_civil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Pessoa,'dt_nascimento'); ?>
		<?php echo $form->textField($Pessoa,'dt_nascimento'); ?>
		<?php echo $form->error($Pessoa,'dt_nascimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Pessoa,'sexo'); ?>
		<?php echo $form->textField($Pessoa,'sexo',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($Pessoa,'sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Pessoa,'naturalidade_municipio'); ?>
		<?php echo $form->textField($Pessoa,'naturalidade_municipio',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($Pessoa,'naturalidade_municipio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Pessoa,'naturalidade_uf'); ?>
		<?php echo $form->textField($Pessoa,'naturalidade_uf',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($Pessoa,'naturalidade_uf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Pessoa,'nacionalidade'); ?>
		<?php echo $form->textField($Pessoa,'nacionalidade',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($Pessoa,'nacionalidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Pessoa,'rg'); ?>
		<?php echo $form->textField($Pessoa,'rg',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($Pessoa,'rg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Pessoa,'data_emissao_rg'); ?>
		<?php echo $form->textField($Pessoa,'data_emissao_rg'); ?>
		<?php echo $form->error($Pessoa,'data_emissao_rg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Pessoa,'orgao_emissor_rg'); ?>
		<?php echo $form->textField($Pessoa,'orgao_emissor_rg',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($Pessoa,'orgao_emissor_rg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Pessoa,'cod_titulo_eleitor'); ?>
		<?php echo $form->textField($Pessoa,'cod_titulo_eleitor',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($Pessoa,'cod_titulo_eleitor'); ?>
	</div>



	<h2><?php echo Yii::t('app','Student Data'); ?></h2>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($Aluno,'cpf'); ?>
		<?php //echo $form->textField($Aluno,'cpf',array('size'=>11,'maxlength'=>11)); ?>
		<?php //echo $form->error($Aluno,'cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Aluno,'cod_matricula'); ?>
		<?php echo $form->textField($Aluno,'cod_matricula',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($Aluno,'cod_matricula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Aluno,'data_vestibular'); ?>
		<?php echo $form->textField($Aluno,'data_vestibular'); ?>
		<?php echo $form->error($Aluno,'data_vestibular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Aluno,'pontos_vestibular'); ?>
		<?php echo $form->textField($Aluno,'pontos_vestibular'); ?>
		<?php echo $form->error($Aluno,'pontos_vestibular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Aluno,'data_ultima_matricula'); ?>
		<?php echo $form->textField($Aluno,'data_ultima_matricula'); ?>
		<?php echo $form->error($Aluno,'data_ultima_matricula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Aluno,'classificacao'); ?>
		<?php echo $form->textField($Aluno,'classificacao'); ?>
		<?php echo $form->error($Aluno,'classificacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Aluno,'forma_ingresso'); ?>
		<?php echo $form->textField($Aluno,'forma_ingresso',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($Aluno,'forma_ingresso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Aluno,'escolaridade'); ?>
		<?php echo $form->textField($Aluno,'escolaridade',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($Aluno,'escolaridade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Aluno,'segundo_grau'); ?>
		<?php echo $form->textField($Aluno,'segundo_grau'); ?>
		<?php echo $form->error($Aluno,'segundo_grau'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Aluno,'universitario'); ?>
		<?php echo $form->textField($Aluno,'universitario'); ?>
		<?php echo $form->error($Aluno,'universitario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Aluno,'estabelecimento'); ?>
		<?php echo $form->textField($Aluno,'estabelecimento',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($Aluno,'estabelecimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Aluno,'sede'); ?>
		<?php echo $form->textField($Aluno,'sede',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($Aluno,'sede'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Aluno,'estado'); ?>
		<?php echo $form->textField($Aluno,'estado',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($Aluno,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Aluno,'conclusao'); ?>
		<?php echo $form->textField($Aluno,'conclusao'); ?>
		<?php echo $form->error($Aluno,'conclusao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($Aluno->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->