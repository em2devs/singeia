<?php
/* @var $this EnderecoController */
/* @var $model Endereco */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cpf'); ?>
		<?php echo $form->textField($model,'cpf',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cep'); ?>
		<?php echo $form->textField($model,'cep',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_endereco'); ?>
		<?php echo $form->textField($model,'tipo_endereco',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'logradouro'); ?>
		<?php echo $form->textField($model,'logradouro',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero'); ?>
		<?php echo $form->textField($model,'numero'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'complemento'); ?>
		<?php echo $form->textField($model,'complemento',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bairro'); ?>
		<?php echo $form->textField($model,'bairro',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cidade'); ?>
		<?php echo $form->textField($model,'cidade',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uf'); ?>
		<?php echo $form->textField($model,'uf',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->