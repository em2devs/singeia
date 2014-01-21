<?php
/* @var $this ProfessorController */
/* @var $model Professor */

$this->breadcrumbs=array(
	Yii::t('app', 'Funcionarios')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List Funcionarios'), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Manage Funcionarios'), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_formGeral', array('model'=>$model,'pessoa'=>$pessoa,
													'endereco'=>$endereco,'telefone'=>$telefone,)); ?>