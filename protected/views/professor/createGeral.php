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

<?php echo $this->renderPartial('_formGeral', array('model'=>$model,'pessoa'=>$pessoa,
													'endereco'=>$endereco,'telefone'=>$telefone,)); ?>