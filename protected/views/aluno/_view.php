<?php
/* @var $this AlunoController */
/* @var $data Aluno */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpf')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cpf), array('view', 'id'=>$data->cpf)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_matricula')); ?>:</b>
	<?php echo CHtml::encode($data->cod_matricula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_vestibular')); ?>:</b>
	<?php echo CHtml::encode($data->data_vestibular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pontos_vestibular')); ?>:</b>
	<?php echo CHtml::encode($data->pontos_vestibular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_ultima_matricula')); ?>:</b>
	<?php echo CHtml::encode($data->data_ultima_matricula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('classificacao')); ?>:</b>
	<?php echo CHtml::encode($data->classificacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('forma_ingresso')); ?>:</b>
	<?php echo CHtml::encode($data->forma_ingresso); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('escolaridade')); ?>:</b>
	<?php echo CHtml::encode($data->escolaridade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('segundo_grau')); ?>:</b>
	<?php echo CHtml::encode($data->segundo_grau); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('universitario')); ?>:</b>
	<?php echo CHtml::encode($data->universitario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estabelecimento')); ?>:</b>
	<?php echo CHtml::encode($data->estabelecimento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sede')); ?>:</b>
	<?php echo CHtml::encode($data->sede); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conclusao')); ?>:</b>
	<?php echo CHtml::encode($data->conclusao); ?>
	<br />

	*/ ?>

</div>