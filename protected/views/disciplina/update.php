<?php
/* @var $this DisciplinaController */
/* @var $model Disciplina */

$this->breadcrumbs=array(
	'Disciplinas'=>array('index'),
	$model->cod_disciplina=>array('view','id'=>$model->cod_disciplina),
	'Update',
);

$this->menu=array(
	array('label'=>'List Disciplina', 'url'=>array('index')),
	array('label'=>'Create Disciplina', 'url'=>array('create')),
	array('label'=>'View Disciplina', 'url'=>array('view', 'id'=>$model->cod_disciplina)),
	array('label'=>'Manage Disciplina', 'url'=>array('admin')),
);
?>

<h1>Update Disciplina <?php echo $model->cod_disciplina; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>