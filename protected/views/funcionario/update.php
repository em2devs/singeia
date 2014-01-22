<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */

$this->breadcrumbs=array(
	Yii::t('app', 'Employees')=>array('index'),
	$model->cpf=>array('view','id'=>$model->cpf),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List Employees'), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create Employee'), 'url'=>array('createGeral')),
	array('label'=>Yii::t('app', 'View Employee'), 'url'=>array('view', 'id'=>$model->cpf)),
	array('label'=>Yii::t('app', 'Manage Employees'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Update Employee') .' #'. $model->cpf; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>