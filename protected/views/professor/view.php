<?php
/* @var $this ProfessorController */
/* @var $model Professor */

$this->breadcrumbs=array(
	Yii::t('app', 'Professors')=>array('index'),
	$model->cpf,
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List Professors'), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create Professor'), 'url'=>array('createGeral')),
	array('label'=>Yii::t('app', 'Update Professor'), 'url'=>array('updateGeral', 'id'=>$model->cpf)),
	array('label'=>Yii::t('app', 'Delete Professor'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cpf),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage Professors'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View Professor') . ' #' . $model->cpf; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cpf',
		'registro_funcional',
		'data_admissao',
		'coordenador',
	),
)); ?>
