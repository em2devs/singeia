<?php
/* @var $this CursoController */
/* @var $model Curso */

$this->breadcrumbs=array(
	Yii::t('app','Courses')=>array('index'),
	$model->cod_curso,
);

$this->menu=array(
	array('label'=>Yii::t('app','List Courses'), 'url'=>array('index')),
	array('label'=>Yii::t('app','Create Course'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Update Course'), 'url'=>array('update', 'id'=>$model->cod_curso)),
	array('label'=>Yii::t('app','Delete Course'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_curso),'confirm'=>Yii::t('app','Are you sure you want to delete this item?'))),
	array('label'=>Yii::t('app','Manage Courses'), 'url'=>array('admin')),
);
?>

<h1>View Curso #<?php echo $model->cod_curso; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_curso',
		'nome_curso',
		'sigla_curso',
		'descricao_curso',
		'duracao_curso',
	),
)); ?>
