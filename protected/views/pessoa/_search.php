<?php
/* @var $this PessoaController */
/* @var $model Pessoa */
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
		<?php echo $form->label($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sobrenome'); ?>
		<?php echo $form->textField($model,'sobrenome',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado_civil'); ?>
		<?php echo $form->textField($model,'estado_civil',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_nascimento'); ?>
		<?php echo $form->textField($model,'dt_nascimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sexo'); ?>
		<?php echo $form->textField($model,'sexo',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'naturalidade_municipio'); ?>
		<?php echo $form->textField($model,'naturalidade_municipio',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'naturalidade_uf'); ?>
		<?php echo $form->textField($model,'naturalidade_uf',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nacionalidade'); ?>
		<?php echo $form->textField($model,'nacionalidade',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rg'); ?>
		<?php echo $form->textField($model,'rg',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_emissao_rg'); ?>
		<?php echo $form->textField($model,'data_emissao_rg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'orgao_emissor_rg'); ?>
		<?php echo $form->textField($model,'orgao_emissor_rg',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_titulo_eleitor'); ?>
		<?php echo $form->textField($model,'cod_titulo_eleitor',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->