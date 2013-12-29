<?php
/* @var $this AlunoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t('app','Students'),
);

$this->menu=array(
	array('label'=>Yii::t('app','Create Student'), 'url'=>array('createGeral')),
	array('label'=>Yii::t('app','Manage Students'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Students'); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
