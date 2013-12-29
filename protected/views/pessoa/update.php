<?php
/* @var $this PessoaController */
/* @var $model Pessoa */

$this->breadcrumbs=array(
	'Pessoas'=>array('index'),
	$model->cpf=>array('view','id'=>$model->cpf),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pessoa', 'url'=>array('index')),
	array('label'=>'Create Pessoa', 'url'=>array('create')),
	array('label'=>'View Pessoa', 'url'=>array('view', 'id'=>$model->cpf)),
	array('label'=>'Manage Pessoa', 'url'=>array('admin')),
);
?>

<h1>Update Pessoa <?php echo $model->cpf; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>