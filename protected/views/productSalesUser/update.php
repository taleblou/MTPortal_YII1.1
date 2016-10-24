<?php
/* @var $this ProductSalesUserController */
/* @var $model ProductSalesUser */

$this->breadcrumbs=array(
	'Product Sales Users'=>array('index'),
	$model->productSalesUser=>array('view','id'=>$model->productSalesUser),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductSalesUser', 'url'=>array('index')),
	array('label'=>'Create ProductSalesUser', 'url'=>array('create')),
	array('label'=>'View ProductSalesUser', 'url'=>array('view', 'id'=>$model->productSalesUser)),
	array('label'=>'Manage ProductSalesUser', 'url'=>array('admin')),
);
?>

<h1>Update ProductSalesUser <?php echo $model->productSalesUser; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>