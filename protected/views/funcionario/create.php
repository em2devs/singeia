<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */

$this->breadcrumbs=array(
	Yii::t('app', 'Employees')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List Employees'), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Manage Employess'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create Employee'); ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>