<?php
/* @var $this AlunoController */
/* @var $model Aluno */

$this->breadcrumbs=array(
	Yii::t('app','Students')=>array('index'),
	$model->cpf,
);

$this->menu=array(
	array('label'=>Yii::t('app','List Students'), 'url'=>array('index')),
	array('label'=>Yii::t('app','Create Student'), 'url'=>array('createGeral')),
	array('label'=>Yii::t('app','Update Student'), 'url'=>array('updateGeral', 'id'=>$model->cpf)),
	array('label'=>Yii::t('app','Delete Student'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cpf),'confirm'=>Yii::t('app','Are you sure you want to delete this item?'))),
	array('label'=>Yii::t('app','Manage Students'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View Student') . ' #' . $model->cpf; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cpf',
		'cod_matricula',
		'data_vestibular',
		'pontos_vestibular',
		'data_ultima_matricula',
		'classificacao',
		'forma_ingresso',
		'escolaridade',
		'segundo_grau',
		'universitario',
		'estabelecimento',
		'sede',
		'estado',
		'conclusao',
	),
)); ?>
