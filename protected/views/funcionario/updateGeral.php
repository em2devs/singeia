<?php
/* @var $this ProfessorController */
/* @var $model Professor */

$this->breadcrumbs=array(
	Yii::t('app', 'Funcionarios')=>array('index'),
	$model->cpf=>array('view','id'=>$model->cpf),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List Funcionario')  , 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create Funcionario'), 'url'=>array('createGeral')),
	array('label'=>Yii::t('app', 'View Funcionario')  , 'url'=>array('view', 'id'=>$model->cpf)),
	array('label'=>Yii::t('app', 'Manage Funcionario'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update Student') . ' ' . $model->cpf; ?></h1>

<?php echo $this->renderPartial('_formGeral', array('model'=>$model,'pessoa'=>$pessoa,
													'endereco'=>$endereco,'telefone'=>$telefone)); ?>