<?php
/* @var $this ProfessorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t('app', 'Professors'),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'Create Professor') , 'url'=>array('createGeral')),
	array('label'=>Yii::t('app', 'Manage Professors'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Professors');?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
