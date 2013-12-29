<?php
/* @var $this DisciplinaController */
/* @var $model Disciplina */

$this->breadcrumbs=array(
	Yii::t('app','Subjects')=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List Subjects'), 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage Subjects'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create Subject'); ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>