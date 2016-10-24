<?php
/* @var $this ProductSalesController */
/* @var $model ProductSales */

$this->breadcrumbs=array(
	'Product Sales'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductSales', 'url'=>array('index')),
	array('label'=>'Manage ProductSales', 'url'=>array('admin')),
);
?>

<h1>Create ProductSales</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>