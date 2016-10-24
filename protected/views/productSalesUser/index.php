<?php
/* @var $this ProductSalesUserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Product Sales Users',
);

$this->menu=array(
	array('label'=>'Create ProductSalesUser', 'url'=>array('create')),
	array('label'=>'Manage ProductSalesUser', 'url'=>array('admin')),
);
?>

<h1>Product Sales Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
