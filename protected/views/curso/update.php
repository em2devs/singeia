<?php
/* @var $this CursoController */
/* @var $model Curso */

$this->breadcrumbs=array(
	Yii::t('app','Courses')=>array('index'),
	$model->cod_curso=>array('view','id'=>$model->cod_curso),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List Courses'), 'url'=>array('index')),
	array('label'=>Yii::t('app','Create Course'), 'url'=>array('create')),
	array('label'=>Yii::t('app','View Courses'), 'url'=>array('view', 'id'=>$model->cod_curso)),
	array('label'=>Yii::t('app','Manage Courses'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update Course') . $model->cod_curso; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>