<?php
/* @var $this DisciplinaController */
/* @var $model Disciplina */

$this->breadcrumbs=array(
	'Disciplinas'=>array('index'),
	$model->cod_disciplina,
);

$this->menu=array(
	array('label'=>'List Disciplina', 'url'=>array('index')),
	array('label'=>'Create Disciplina', 'url'=>array('create')),
	array('label'=>'Update Disciplina', 'url'=>array('update', 'id'=>$model->cod_disciplina)),
	array('label'=>'Delete Disciplina', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_disciplina),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Disciplina', 'url'=>array('admin')),
);
?>

<h1>View Disciplina #<?php echo $model->cod_disciplina; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_disciplina',
		'nome_disciplina',
		'sigla_disciplina',
		'descricao_disciplina',
		'carga_horaria_disciplina',
	),
)); ?>
