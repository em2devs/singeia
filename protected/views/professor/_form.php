<?php
/* @var $this ProfessorController */
/* @var $model Professor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'professor-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cpf'); ?>
		<?php echo $form->textField($model,'cpf',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'registro_funcional'); ?>
		<?php echo $form->textField($model,'registro_funcional',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'registro_funcional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_admissao'); ?>
		<?php echo $form->textField($model,'data_admissao'); ?>
		<?php echo $form->error($model,'data_admissao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'coordenador'); ?>
		<?php echo $form->textField($model,'coordenador'); ?>
		<?php echo $form->error($model,'coordenador'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->