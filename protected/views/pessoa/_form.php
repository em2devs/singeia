<?php
/* @var $this PessoaController */
/* @var $model Pessoa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pessoa-form',
	'enableAjaxValidation'=>false,
)); ?>

	<!-- <p class="note">Fields with <span class="required">*</span> are required.</p> -->
	<h1> Dados Pessoais</h1>
	
	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cpf'); ?>
		<?php echo $form->textField($model,'cpf',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sobrenome'); ?>
		<?php echo $form->textField($model,'sobrenome',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'sobrenome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado_civil'); ?>
		<?php echo $form->textField($model,'estado_civil',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'estado_civil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_nascimento'); ?>
		<?php echo $form->textField($model,'dt_nascimento'); ?>
		<?php echo $form->error($model,'dt_nascimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sexo'); ?>
		<?php echo $form->textField($model,'sexo',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'naturalidade_municipio'); ?>
		<?php echo $form->textField($model,'naturalidade_municipio',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'naturalidade_municipio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'naturalidade_uf'); ?>
		<?php echo $form->textField($model,'naturalidade_uf',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'naturalidade_uf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nacionalidade'); ?>
		<?php echo $form->textField($model,'nacionalidade',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nacionalidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rg'); ?>
		<?php echo $form->textField($model,'rg',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'rg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_emissao_rg'); ?>
		<?php echo $form->textField($model,'data_emissao_rg'); ?>
		<?php echo $form->error($model,'data_emissao_rg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'orgao_emissor_rg'); ?>
		<?php echo $form->textField($model,'orgao_emissor_rg',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'orgao_emissor_rg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_titulo_eleitor'); ?>
		<?php echo $form->textField($model,'cod_titulo_eleitor',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'cod_titulo_eleitor'); ?>
	</div>

	<div class="row buttons"> 
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div> 

<?php $this->endWidget(); ?>

</div><!-- form -->