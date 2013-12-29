<?php
/* @var $this EnderecoController */
/* @var $model Endereco */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'endereco-form',
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
		<?php echo $form->labelEx($model,'cep'); ?>
		<?php echo $form->textField($model,'cep',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'cep'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_endereco'); ?>
		<?php echo $form->textField($model,'tipo_endereco',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'tipo_endereco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'logradouro'); ?>
		<?php echo $form->textField($model,'logradouro',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'logradouro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numero'); ?>
		<?php echo $form->textField($model,'numero'); ?>
		<?php echo $form->error($model,'numero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'complemento'); ?>
		<?php echo $form->textField($model,'complemento',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'complemento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bairro'); ?>
		<?php echo $form->textField($model,'bairro',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'bairro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cidade'); ?>
		<?php echo $form->textField($model,'cidade',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'cidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uf'); ?>
		<?php echo $form->textField($model,'uf',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'uf'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->