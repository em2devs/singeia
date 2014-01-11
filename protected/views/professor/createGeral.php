<?php
/* @var $this ProfessorController */
/* @var $model Professor */

$this->breadcrumbs=array(
	'Professors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Professor', 'url'=>array('index')),
	array('label'=>'Manage Professor', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_formGeral', array('model'=>$model,'pessoa'=>$pessoa,
													'endereco'=>$endereco,'telefone'=>$telefone,)); ?>