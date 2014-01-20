<?php
/* @var $this ProfessorController */
/* @var $model Professor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'professor-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note"><?php echo Yii::t('app','Fields with <span class="required">*</span> are required.'); ?></p>

	<h1><?php echo Yii::t('app','Professor Register'); ?></h1>
        
	<h2><?php echo Yii::t('app','Personal Data'); ?></h2>
        
        <?php echo $form->errorSummary($pessoa); ?>
        
	<div class="row">
		<?php echo $form->labelEx($pessoa,'cpf'); ?>
		<?php echo $form->textField($pessoa,'cpf',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($pessoa,'cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pessoa,'nome'); ?>
		<?php echo $form->textField($pessoa,'nome',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($pessoa,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pessoa,'sobrenome'); ?>
		<?php echo $form->textField($pessoa,'sobrenome',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($pessoa,'sobrenome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pessoa,'estado_civil'); ?>
		<?php echo $form->textField($pessoa,'estado_civil',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($pessoa,'estado_civil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pessoa,'dt_nascimento'); ?>
		<?php echo $form->textField($pessoa,'dt_nascimento'); ?>
		<?php echo $form->error($pessoa,'dt_nascimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pessoa,'sexo'); ?>
		<?php echo $form->textField($pessoa,'sexo',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($pessoa,'sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pessoa,'naturalidade_municipio'); ?>
		<?php echo $form->textField($pessoa,'naturalidade_municipio',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($pessoa,'naturalidade_municipio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pessoa,'naturalidade_uf'); ?>
		<?php echo $form->textField($pessoa,'naturalidade_uf',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($pessoa,'naturalidade_uf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pessoa,'nacionalidade'); ?>
		<?php echo $form->textField($pessoa,'nacionalidade',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($pessoa,'nacionalidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pessoa,'rg'); ?>
		<?php echo $form->textField($pessoa,'rg',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($pessoa,'rg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pessoa,'data_emissao_rg'); ?>
		<?php echo $form->textField($pessoa,'data_emissao_rg'); ?>
		<?php echo $form->error($pessoa,'data_emissao_rg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pessoa,'orgao_emissor_rg'); ?>
		<?php echo $form->textField($pessoa,'orgao_emissor_rg',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($pessoa,'orgao_emissor_rg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pessoa,'cod_titulo_eleitor'); ?>
		<?php echo $form->textField($pessoa,'cod_titulo_eleitor',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($pessoa,'cod_titulo_eleitor'); ?>
	</div>

	
	<?php echo $form->errorSummary($model); ?>

	<h2><?php echo Yii::t('app','Dados Funcionais'); ?></h2>
	<div class="row">
		<?php echo $form->labelEx($model,'registro_funcional'); ?>
		<?php echo $form->textField($model,'registro_funcional',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'registro_funcional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_admissao'); ?>
		<?php echo $form->textField($model,'data_admissao'); ?>
		<?php echo $form->error($model,'data_admissao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'coordenador'); ?>
		<?php echo $form->textField($model,'coordenador'); ?>
		<?php echo $form->error($model,'coordenador'); ?>
	</div>
	
	<h2><?php echo Yii::t('app','Endereço'); ?></h2>
		<?php echo $form->errorSummary($endereco); ?>

	<div class="row">
		<?php echo $form->labelEx($endereco,'cep'); ?>
		<?php echo $form->textField($endereco,'cep',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($endereco,'cep'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($endereco,'tipo_endereco'); ?>
		<?php echo $form->textField($endereco,'tipo_endereco',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($endereco,'tipo_endereco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($endereco,'logradouro'); ?>
		<?php echo $form->textField($endereco,'logradouro',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($endereco,'logradouro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($endereco,'numero'); ?>
		<?php echo $form->textField($endereco,'numero'); ?>
		<?php echo $form->error($endereco,'numero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($endereco,'complemento'); ?>
		<?php echo $form->textField($endereco,'complemento',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($endereco,'complemento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($endereco,'bairro'); ?>
		<?php echo $form->textField($endereco,'bairro',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($endereco,'bairro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($endereco,'cidade'); ?>
		<?php echo $form->textField($endereco,'cidade',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($endereco,'cidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($endereco,'uf'); ?>
		<?php echo $form->textField($endereco,'uf',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($endereco,'uf'); ?>
	</div>
	
	<h2><?php echo Yii::t('app','Telefone'); ?></h2>
	<?php echo $form->errorSummary($telefone); ?>

	<div class="row">
		<?php echo $form->labelEx($telefone,'cod_area_telefone'); ?>
		<?php echo $form->textField($telefone,'cod_area_telefone'); ?>
		<?php echo $form->error($telefone,'cod_area_telefone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($telefone,'numero_telefone'); ?>
		<?php echo $form->textField($telefone,'numero_telefone',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($telefone,'numero_telefone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($telefone,'tipo_telefone'); ?>
		<?php echo $form->textField($telefone,'tipo_telefone',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($telefone,'tipo_telefone'); ?>
	</div>
	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->