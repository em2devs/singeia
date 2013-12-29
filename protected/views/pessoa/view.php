<?php
/* @var $this PessoaController */
/* @var $model Pessoa */

$this->breadcrumbs=array(
	'Pessoas'=>array('index'),
	$model->cpf,
);

$this->menu=array(
	array('label'=>'List Pessoa', 'url'=>array('index')),
	array('label'=>'Create Pessoa', 'url'=>array('create')),
	array('label'=>'Update Pessoa', 'url'=>array('update', 'id'=>$model->cpf)),
	array('label'=>'Delete Pessoa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cpf),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pessoa', 'url'=>array('admin')),
);
?>

<h1>View Pessoa #<?php echo $model->cpf; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cpf',
		'nome',
		'sobrenome',
		'estado_civil',
		'dt_nascimento',
		'sexo',
		'naturalidade_municipio',
		'naturalidade_uf',
		'nacionalidade',
		'rg',
		'data_emissao_rg',
		'orgao_emissor_rg',
		'cod_titulo_eleitor',
	),
)); ?>
