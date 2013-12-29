<?php
/* @var $this AlunoController */
/* @var $model Aluno */

$this->breadcrumbs=array(
	'Alunos'=>array('index'),
	$model->cpf=>array('view','id'=>$model->cpf),
	'Update',
);

$this->menu=array(
	array('label'=>'List Aluno', 'url'=>array('index')),
	array('label'=>'Create Aluno', 'url'=>array('create')),
	array('label'=>'View Aluno', 'url'=>array('view', 'id'=>$model->cpf)),
	array('label'=>'Manage Aluno', 'url'=>array('admin')),
);
?>

<h1>Update Aluno <?php echo $model->cpf; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>