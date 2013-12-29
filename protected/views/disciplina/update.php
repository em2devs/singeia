<?php
/* @var $this DisciplinaController */
/* @var $model Disciplina */

$this->breadcrumbs=array(
	Yii::t('app','Subjects')=>array('index'),
	$model->cod_disciplina=>array('view','id'=>$model->cod_disciplina),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List Subjects'), 'url'=>array('index')),
	array('label'=>Yii::t('app','Create Subject'), 'url'=>array('create')),
	array('label'=>Yii::t('app','View Subject'), 'url'=>array('view', 'id'=>$model->cod_disciplina)),
	array('label'=>Yii::t('app','Manage Subjects'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update Subject') . ' ' . $model->cod_disciplina; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>