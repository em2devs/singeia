<?php
/* @var $this DisciplinaController */
/* @var $model Disciplina */

$this->breadcrumbs=array(
	Yii::t('app','Subjects')=>array('index'),
	$model->cod_disciplina,
);

$this->menu=array(
	array('label'=>Yii::t('app','List Subjects'), 'url'=>array('index')),
	array('label'=>Yii::t('app','Create Subject'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Update Subject'), 'url'=>array('update', 'id'=>$model->cod_disciplina)),
	array('label'=>Yii::t('app','Delete Subject'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_disciplina),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage Subjects'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View Subject') . ' #' . $model->cod_disciplina; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_disciplina',
		'nome_disciplina',
		'sigla_disciplina',
		'descricao_disciplina',
	),
)); ?>
