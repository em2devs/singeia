<?php
/* @var $this DisciplinaController */
/* @var $model Disciplina */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_disciplina'); ?>
		<?php echo $form->textField($model,'cod_disciplina'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_disciplina'); ?>
		<?php echo $form->textField($model,'nome_disciplina',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sigla_disciplina'); ?>
		<?php echo $form->textField($model,'sigla_disciplina',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descricao_disciplina'); ?>
		<?php echo $form->textArea($model,'descricao_disciplina',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->