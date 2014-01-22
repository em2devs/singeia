<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */

$this->breadcrumbs=array(
	Yii::t('app', 'Employees')=>array('index'),
	$model->cpf,
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List Employees'), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create Employee'), 'url'=>array('createGeral')),
	array('label'=>Yii::t('app', 'Update Employee'), 'url'=>array('updateGeral', 'id'=>$model->cpf)),
	array('label'=>Yii::t('app', 'Delete Employee'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cpf),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage Employees'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View Employee') . ' #' . $model->cpf; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cpf',
		'registro_funcional',
		'data_admissao',
	),
)); ?>
