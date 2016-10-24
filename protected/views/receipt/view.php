<?php
/* @var $this ReceiptController */
/* @var $model Receipt */

$this->breadcrumbs=array(
	'Receipts'=>array('index'),
	$model->ReceiptID,
);

/*$this->menu=array(
	array('label'=>'List Receipt', 'url'=>array('index')),
	array('label'=>'Create Receipt', 'url'=>array('create')),
	array('label'=>'Update Receipt', 'url'=>array('update', 'id'=>$model->ReceiptID)),
	array('label'=>'Delete Receipt', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ReceiptID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Receipt', 'url'=>array('admin')),
);*/
?>

<!--<h1>View Receipt #<?php /*echo $model->ReceiptID; */?></h1>-->

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ReceiptID',
		'ReceiptUserID',
		'ReceiptAddDate',
	),
)); ?>
