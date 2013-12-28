<?php
/* @var $this CursoController */
/* @var $model Curso */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'curso-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_curso'); ?>
		<?php echo $form->textField($model,'cod_curso'); ?>
		<?php echo $form->error($model,'cod_curso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome_curso'); ?>
		<?php echo $form->textField($model,'nome_curso',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nome_curso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sigla_curso'); ?>
		<?php echo $form->textField($model,'sigla_curso',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'sigla_curso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descricao_curso'); ?>
		<?php echo $form->textArea($model,'descricao_curso',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descricao_curso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'duracao_curso'); ?>
		<?php echo $form->textField($model,'duracao_curso'); ?>
		<?php echo $form->error($model,'duracao_curso'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->