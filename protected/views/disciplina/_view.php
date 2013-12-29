<?php
/* @var $this DisciplinaController */
/* @var $data Disciplina */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_disciplina')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_disciplina), array('view', 'id'=>$data->cod_disciplina)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_disciplina')); ?>:</b>
	<?php echo CHtml::encode($data->nome_disciplina); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sigla_disciplina')); ?>:</b>
	<?php echo CHtml::encode($data->sigla_disciplina); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao_disciplina')); ?>:</b>
	<?php echo CHtml::encode($data->descricao_disciplina); ?>
	<br />

</div>