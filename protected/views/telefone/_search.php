<?php
/* @var $this TelefoneController */
/* @var $model Telefone */
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
		<?php echo $form->label($model,'cod_area_telefone'); ?>
		<?php echo $form->textField($model,'cod_area_telefone'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero_telefone'); ?>
		<?php echo $form->textField($model,'numero_telefone',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_telefone'); ?>
		<?php echo $form->textField($model,'tipo_telefone',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->