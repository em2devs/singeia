<?php
/* @var $this CursoController */
/* @var $model Curso */

$this->breadcrumbs=array(
	Yii::t('app','Courses')=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List Courses'), 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage Courses'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create Course'); ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>