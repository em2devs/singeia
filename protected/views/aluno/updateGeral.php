<?php
/* @var $this AlunoController */
/* @var $model Aluno */

$this->breadcrumbs=array(
	Yii::t('app','Students')=>array('index'),
	$Aluno->cpf=>array('view','id'=>$Aluno->cpf),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List Students'), 'url'=>array('index')),
	array('label'=>Yii::t('app','Create Student'), 'url'=>array('createGeral')),
	array('label'=>Yii::t('app','View Student'), 'url'=>array('view', 'id'=>$Aluno->cpf)),
	array('label'=>Yii::t('app','Manage Aluno'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update Student') . ' ' . $Aluno->cpf; ?></h1>

<?php echo $this->renderPartial('_formGeral', array('Aluno'=>$Aluno,'Pessoa'=>$Pessoa)); ?>