<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - '.Yii::t('app','About');
$this->breadcrumbs=array(
	Yii::t('app','About'),
);
?>
<h1><?php echo Yii::t('app','About'); ?></h1>

<p>This is a "static" page. You may change the content of this page
by updating the file <code><?php echo __FILE__; ?></code>.</p>
