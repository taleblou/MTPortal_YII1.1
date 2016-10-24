<?php
/* @var $this ProductSalesUserController */
/* @var $model ProductSalesUser */

$this->breadcrumbs=array(
	'Product Sales Users'=>array('index'),
	$model->productSalesUser,
);

$this->menu=array(
	array('label'=>'List ProductSalesUser', 'url'=>array('index')),
	array('label'=>'Create ProductSalesUser', 'url'=>array('create')),
	array('label'=>'Update ProductSalesUser', 'url'=>array('update', 'id'=>$model->productSalesUser)),
	array('label'=>'Delete ProductSalesUser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->productSalesUser),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductSalesUser', 'url'=>array('admin')),
);
?>

<h1>View ProductSalesUser #<?php echo $model->productSalesUser; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ProductSalesID',
		'UserID',
		'ProductSalesUserPrice',
		'ProductSalesUserAddDate',
		'productSalesUser',
	),
)); ?>
