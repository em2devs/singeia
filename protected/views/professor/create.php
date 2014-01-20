<?php
/* @var $this ProfessorController */
/* @var $model Professor */

$this->breadcrumbs=array(
	Yii::t('app', 'Professors')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List Professors'), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Manage Professors'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create Professor'); ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>