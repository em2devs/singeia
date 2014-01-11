<?php
/* @var $this ProfessorController */
/* @var $data Professor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpf')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cpf), array('view', 'id'=>$data->cpf)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registro_funcional')); ?>:</b>
	<?php echo CHtml::encode($data->registro_funcional); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_admissao')); ?>:</b>
	<?php echo CHtml::encode($data->data_admissao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('coordenador')); ?>:</b>
	<?php echo CHtml::encode($data->coordenador); ?>
	<br />


</div>