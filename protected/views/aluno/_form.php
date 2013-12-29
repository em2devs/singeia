<?php
/* @var $this AlunoController */
/* @var $model Aluno */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'aluno-form',
	'enableAjaxValidation'=>false,
)); ?>

	<h1><?php echo Yii::t('app','Student Data'); ?></h1>
	<p class="note"><?php echo Yii::t('app','Fields with <span class="required">*</span> are required.'); ?></p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cpf'); ?>
		<?php echo $form->textField($model,'cpf',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_matricula'); ?>
		<?php echo $form->textField($model,'cod_matricula',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cod_matricula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_vestibular'); ?>
		<?php echo $form->textField($model,'data_vestibular'); ?>
		<?php echo $form->error($model,'data_vestibular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pontos_vestibular'); ?>
		<?php echo $form->textField($model,'pontos_vestibular'); ?>
		<?php echo $form->error($model,'pontos_vestibular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_ultima_matricula'); ?>
		<?php echo $form->textField($model,'data_ultima_matricula'); ?>
		<?php echo $form->error($model,'data_ultima_matricula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'classificacao'); ?>
		<?php echo $form->textField($model,'classificacao'); ?>
		<?php echo $form->error($model,'classificacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'forma_ingresso'); ?>
		<?php echo $form->textField($model,'forma_ingresso',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'forma_ingresso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'escolaridade'); ?>
		<?php echo $form->textField($model,'escolaridade',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'escolaridade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'segundo_grau'); ?>
		<?php echo $form->textField($model,'segundo_grau'); ?>
		<?php echo $form->error($model,'segundo_grau'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'universitario'); ?>
		<?php echo $form->textField($model,'universitario'); ?>
		<?php echo $form->error($model,'universitario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estabelecimento'); ?>
		<?php echo $form->textField($model,'estabelecimento',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'estabelecimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sede'); ?>
		<?php echo $form->textField($model,'sede',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'sede'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conclusao'); ?>
		<?php echo $form->textField($model,'conclusao'); ?>
		<?php echo $form->error($model,'conclusao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->