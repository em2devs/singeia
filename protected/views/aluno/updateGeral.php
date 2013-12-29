<?php
/* @var $this AlunoController */
/* @var $pessoa Pessoa */
/* @var $model Aluno */

$this->breadcrumbs=array(
	Yii::t('app','Students')=>array('index'),
	$model->cpf=>array('view','id'=>$model->cpf),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List Students'), 'url'=>array('index')),
	array('label'=>Yii::t('app','Create Student'), 'url'=>array('createGeral')),
	array('label'=>Yii::t('app','View Student'), 'url'=>array('view', 'id'=>$model->cpf)),
	array('label'=>Yii::t('app','Manage Aluno'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update Student') . ' ' . $model->cpf; ?></h1>

<?php echo $this->renderPartial('_formGeral', array('model'=>$model,'pessoa'=>$pessoa)); ?>