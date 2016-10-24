<?php
/* @var $this ProductSalesController */
/* @var $model ProductSales */

$this->breadcrumbs=array(
	'Product Sales'=>array('index'),
	$model->ProductSalesID=>array('view','id'=>$model->ProductSalesID),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductSales', 'url'=>array('index')),
	array('label'=>'Create ProductSales', 'url'=>array('create')),
	array('label'=>'View ProductSales', 'url'=>array('view', 'id'=>$model->ProductSalesID)),
	array('label'=>'Manage ProductSales', 'url'=>array('admin')),
);
?>

<h1>Update ProductSales <?php echo $model->ProductSalesID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>