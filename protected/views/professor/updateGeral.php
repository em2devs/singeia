<?php
/* @var $this ProfessorController */
/* @var $model Professor */

$this->breadcrumbs=array(
	'Professors'=>array('index'),
	$model->cpf=>array('view','id'=>$model->cpf),
	'Update',
);

$this->menu=array(
	array('label'=>'List Professor', 'url'=>array('index')),
	array('label'=>'Create Professor', 'url'=>array('create')),
	array('label'=>'View Professor', 'url'=>array('view', 'id'=>$model->cpf)),
	array('label'=>'Manage Professor', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update Student') . ' ' . $model->cpf; ?></h1>

<?php echo $this->renderPartial('_formGeral', array('model'=>$model,'pessoa'=>$pessoa,
													'endereco'=>$endereco,'telefone'=>$telefone)); ?>