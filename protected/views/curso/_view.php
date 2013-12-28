<?php
/* @var $this CursoController */
/* @var $data Curso */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_curso')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_curso), array('view', 'id'=>$data->cod_curso)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_curso')); ?>:</b>
	<?php echo CHtml::encode($data->nome_curso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sigla_curso')); ?>:</b>
	<?php echo CHtml::encode($data->sigla_curso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao_curso')); ?>:</b>
	<?php echo CHtml::encode($data->descricao_curso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duracao_curso')); ?>:</b>
	<?php echo CHtml::encode($data->duracao_curso); ?>
	<br />


</div>