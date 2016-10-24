<?php
/* @var $this RegimeController */
/* @var $model Regime */

$this->breadcrumbs=array(
	'Regimes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Regime', 'url'=>array('index')),
	array('label'=>'Manage Regime', 'url'=>array('admin')),
);
?>

<h1>Create Regime</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>