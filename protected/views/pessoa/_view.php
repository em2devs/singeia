<?php
/* @var $this PessoaController */
/* @var $data Pessoa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpf')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cpf), array('view', 'id'=>$data->cpf)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sobrenome')); ?>:</b>
	<?php echo CHtml::encode($data->sobrenome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_civil')); ?>:</b>
	<?php echo CHtml::encode($data->estado_civil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dt_nascimento')); ?>:</b>
	<?php echo CHtml::encode($data->dt_nascimento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexo')); ?>:</b>
	<?php echo CHtml::encode($data->sexo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('naturalidade_municipio')); ?>:</b>
	<?php echo CHtml::encode($data->naturalidade_municipio); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('naturalidade_uf')); ?>:</b>
	<?php echo CHtml::encode($data->naturalidade_uf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nacionalidade')); ?>:</b>
	<?php echo CHtml::encode($data->nacionalidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rg')); ?>:</b>
	<?php echo CHtml::encode($data->rg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_emissao_rg')); ?>:</b>
	<?php echo CHtml::encode($data->data_emissao_rg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orgao_emissor_rg')); ?>:</b>
	<?php echo CHtml::encode($data->orgao_emissor_rg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_titulo_eleitor')); ?>:</b>
	<?php echo CHtml::encode($data->cod_titulo_eleitor); ?>
	<br />

	*/ ?>

</div>