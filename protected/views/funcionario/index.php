<?php
/* @var $this FuncionarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t('app', 'Employees'),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'Create Employee'), 'url'=>array('createGeral')),
	array('label'=>Yii::t('app', 'Manage Employees'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Employees'); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
