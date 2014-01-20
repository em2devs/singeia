<?php
/* @var $this ProfessorController */
/* @var $model Professor */

$this->breadcrumbs=array(
	Yii::t('app', 'Professors')=>array('index'),
	$model->cpf=>array('view','id'=>$model->cpf),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List Professors')  , 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create Professor') , 'url'=>array('createGeral')),
	array('label'=>Yii::t('app', 'View Professor')   , 'url'=>array('view', 'id'=>$model->cpf)),
	array('label'=>Yii::t('app', 'Manage Professors'), 'url'=>array('admin')),
);
?>

<h1>Update Professor <?php echo $model->cpf; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>