<?php
/* @var $this CursoController */
/* @var $model Curso */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_curso'); ?>
		<?php echo $form->textField($model,'cod_curso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_curso'); ?>
		<?php echo $form->textField($model,'nome_curso',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sigla_curso'); ?>
		<?php echo $form->textField($model,'sigla_curso',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descricao_curso'); ?>
		<?php echo $form->textArea($model,'descricao_curso',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'duracao_curso'); ?>
		<?php echo $form->textField($model,'duracao_curso'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->