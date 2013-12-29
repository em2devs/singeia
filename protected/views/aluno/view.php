<?php
/* @var $this AlunoController */
/* @var $model Aluno */

$this->breadcrumbs=array(
	'Alunos'=>array('index'),
	$model->cpf,
);

$this->menu=array(
	array('label'=>'List Aluno', 'url'=>array('index')),
	array('label'=>'Create Aluno', 'url'=>array('create')),
	array('label'=>'Update Aluno', 'url'=>array('update', 'id'=>$model->cpf)),
	array('label'=>'Delete Aluno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cpf),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Aluno', 'url'=>array('admin')),
);
?>

<h1>View Aluno #<?php echo $model->cpf; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cpf',
		'cod_matricula',
		'data_vestibular',
		'pontos_vestibular',
		'data_ultima_matricula',
		'classificacao',
		'forma_ingresso',
		'escolaridade',
		'segundo_grau',
		'universitario',
		'estabelecimento',
		'sede',
		'estado',
		'conclusao',
	),
)); ?>
