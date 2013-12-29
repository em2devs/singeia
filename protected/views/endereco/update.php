<?php
/* @var $this EnderecoController */
/* @var $model Endereco */

$this->breadcrumbs=array(
	'Enderecos'=>array('index'),
	$model->cpf=>array('view','id'=>$model->cpf),
	'Update',
);

$this->menu=array(
	array('label'=>'List Endereco', 'url'=>array('index')),
	array('label'=>'Create Endereco', 'url'=>array('create')),
	array('label'=>'View Endereco', 'url'=>array('view', 'id'=>$model->cpf)),
	array('label'=>'Manage Endereco', 'url'=>array('admin')),
);
?>

<h1>Update Endereco <?php echo $model->cpf; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>