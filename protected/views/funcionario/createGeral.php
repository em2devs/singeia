<?php
/* @var $this ProfessorController */
/* @var $model Professor */
/* @var $pessoa Pessoa */

$this->breadcrumbs=array(
	Yii::t('app', 'Employees')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List Employees'), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Manage Employees'), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_formGeral', array('model'=>$model,'pessoa'=>$pessoa,
													'endereco'=>$endereco,'telefone'=>$telefone,)); ?>