<?php
/* @var $this ProductSalesUserController */
/* @var $model ProductSalesUser */

$this->breadcrumbs=array(
	'Product Sales Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductSalesUser', 'url'=>array('index')),
	array('label'=>'Manage ProductSalesUser', 'url'=>array('admin')),
);
?>

<h1>Create ProductSalesUser</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>