<?php
/* @var $this DisciplinaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t('app','Subjects'),
);

$this->menu=array(
	array('label'=>Yii::t('app','Create Subject'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage Subjects'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Subjects'); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
