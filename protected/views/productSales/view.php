<?php
/* @var $this ProductSalesController */
/* @var $model ProductSales */

$this->breadcrumbs=array(
	'Product Sales'=>array('index'),
	$model->ProductSalesID,
);

$this->menu=array(
	array('label'=>'List ProductSales', 'url'=>array('index')),
	array('label'=>'Create ProductSales', 'url'=>array('create')),
	array('label'=>'Update ProductSales', 'url'=>array('update', 'id'=>$model->ProductSalesID)),
	array('label'=>'Delete ProductSales', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ProductSalesID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductSales', 'url'=>array('admin')),
);
?>

<h1>View ProductSales #<?php echo $model->ProductSalesID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ProductSalesID',
		'ProductSalesAddBy',
		'ProductSalesAddDate',
		'ProductSalesProductValueID',
		'ProductSalesStatus',
		'ProductSalesStart',
		'ProductSalesEnd',
	),
)); ?>
