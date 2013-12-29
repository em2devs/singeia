<?php
/* @var $this EnderecoController */
/* @var $data Endereco */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpf')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cpf), array('view', 'id'=>$data->cpf)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cep')); ?>:</b>
	<?php echo CHtml::encode($data->cep); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_endereco')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_endereco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('logradouro')); ?>:</b>
	<?php echo CHtml::encode($data->logradouro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero')); ?>:</b>
	<?php echo CHtml::encode($data->numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('complemento')); ?>:</b>
	<?php echo CHtml::encode($data->complemento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bairro')); ?>:</b>
	<?php echo CHtml::encode($data->bairro); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cidade')); ?>:</b>
	<?php echo CHtml::encode($data->cidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uf')); ?>:</b>
	<?php echo CHtml::encode($data->uf); ?>
	<br />

	*/ ?>

</div>