<?php
/* @var $this TelefoneController */
/* @var $model Telefone */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'telefone-form',
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
		<?php echo $form->labelEx($model,'cod_area_telefone'); ?>
		<?php echo $form->textField($model,'cod_area_telefone'); ?>
		<?php echo $form->error($model,'cod_area_telefone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numero_telefone'); ?>
		<?php echo $form->textField($model,'numero_telefone',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'numero_telefone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_telefone'); ?>
		<?php echo $form->textField($model,'tipo_telefone',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'tipo_telefone'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->