<?php
/* @var $this AlunoController */
/* @var $model Aluno */
/* @var $pessoa Pessoa */

$this->breadcrumbs=array(
	Yii::t('app','Students')=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List Students'), 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage Students'), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_formGeral', array('model'=>$model,'pessoa'=>$pessoa,
													'endereco'=>$endereco,'telefone'=>$telefone,)); ?>