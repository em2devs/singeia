<?php
/* @var $this DisciplinaController */
/* @var $model Disciplina */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'disciplina-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?php echo Yii::t('app','Fields with <span class="required">*</span> are required.'); ?></p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_disciplina'); ?>
		<?php echo $form->textField($model,'cod_disciplina'); ?>
		<?php echo $form->error($model,'cod_disciplina'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome_disciplina'); ?>
		<?php echo $form->textField($model,'nome_disciplina',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nome_disciplina'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sigla_disciplina'); ?>
		<?php echo $form->textField($model,'sigla_disciplina',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'sigla_disciplina'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descricao_disciplina'); ?>
		<?php echo $form->textArea($model,'descricao_disciplina',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descricao_disciplina'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'carga_horaria_disciplina'); ?>
		<?php echo $form->textField($model,'carga_horaria_disciplina'); ?>
		<?php echo $form->error($model,'carga_horaria_disciplina'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('app','Create') : Yii::t('app','Save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->