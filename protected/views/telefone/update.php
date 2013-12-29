<?php
/* @var $this TelefoneController */
/* @var $model Telefone */

$this->breadcrumbs=array(
	'Telefones'=>array('index'),
	$model->cpf=>array('view','id'=>$model->cpf),
	'Update',
);

$this->menu=array(
	array('label'=>'List Telefone', 'url'=>array('index')),
	array('label'=>'Create Telefone', 'url'=>array('create')),
	array('label'=>'View Telefone', 'url'=>array('view', 'id'=>$model->cpf)),
	array('label'=>'Manage Telefone', 'url'=>array('admin')),
);
?>

<h1>Update Telefone <?php echo $model->cpf; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>