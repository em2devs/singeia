<?php
/* @var $this CursoController */
/* @var $model Curso */

$this->breadcrumbs=array(
	'Cursos'=>array('index'),
	$model->cod_curso=>array('view','id'=>$model->cod_curso),
	'Update',
);

$this->menu=array(
	array('label'=>'List Curso', 'url'=>array('index')),
	array('label'=>'Create Curso', 'url'=>array('create')),
	array('label'=>'View Curso', 'url'=>array('view', 'id'=>$model->cod_curso)),
	array('label'=>'Manage Curso', 'url'=>array('admin')),
);
?>

<h1>Update Curso <?php echo $model->cod_curso; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>