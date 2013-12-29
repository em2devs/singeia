<?php
/* @var $this AlunoController */
/* @var $model Aluno */
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
		<?php echo $form->label($model,'cod_matricula'); ?>
		<?php echo $form->textField($model,'cod_matricula',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_vestibular'); ?>
		<?php echo $form->textField($model,'data_vestibular'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pontos_vestibular'); ?>
		<?php echo $form->textField($model,'pontos_vestibular'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_ultima_matricula'); ?>
		<?php echo $form->textField($model,'data_ultima_matricula'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'classificacao'); ?>
		<?php echo $form->textField($model,'classificacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'forma_ingresso'); ?>
		<?php echo $form->textField($model,'forma_ingresso',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'escolaridade'); ?>
		<?php echo $form->textField($model,'escolaridade',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'segundo_grau'); ?>
		<?php echo $form->textField($model,'segundo_grau'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'universitario'); ?>
		<?php echo $form->textField($model,'universitario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estabelecimento'); ?>
		<?php echo $form->textField($model,'estabelecimento',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sede'); ?>
		<?php echo $form->textField($model,'sede',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conclusao'); ?>
		<?php echo $form->textField($model,'conclusao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->