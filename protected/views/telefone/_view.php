<?php
/* @var $this TelefoneController */
/* @var $data Telefone */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpf')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cpf), array('view', 'id'=>$data->cpf)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_area_telefone')); ?>:</b>
	<?php echo CHtml::encode($data->cod_area_telefone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_telefone')); ?>:</b>
	<?php echo CHtml::encode($data->numero_telefone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_telefone')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_telefone); ?>
	<br />


</div>