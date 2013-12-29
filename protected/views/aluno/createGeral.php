<?php
/* @var $this AlunoController */
/* @var $model Aluno */

$this->breadcrumbs=array(
	'Alunos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Aluno', 'url'=>array('index')),
	array('label'=>'Manage Aluno', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_formGeral', array('Aluno'=>$Aluno,'Pessoa'=>$Pessoa)); ?>