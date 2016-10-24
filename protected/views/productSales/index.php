<?php
/* @var $this ProductSalesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Product Sales',
);

$this->menu=array(
	array('label'=>'Create ProductSales', 'url'=>array('create')),
	array('label'=>'Manage ProductSales', 'url'=>array('admin')),
);
?>

<h1>Product Sales</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
