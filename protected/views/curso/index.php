<?php
/* @var $this CursoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t('app','Courses'),
);

$this->menu=array(
	array('label'=>Yii::t('app','Create Course'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage Courses'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Courses'); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
