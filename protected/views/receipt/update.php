<?php
/* @var $this ReceiptController */
/* @var $model Receipt */

$this->breadcrumbs=array(
	'Receipts'=>array('index'),
	$model->ReceiptID=>array('view','id'=>$model->ReceiptID),
	'Update',
);

/*$this->menu=array(
	array('label'=>'List Receipt', 'url'=>array('index')),
	array('label'=>'Create Receipt', 'url'=>array('create')),
	array('label'=>'View Receipt', 'url'=>array('view', 'id'=>$model->ReceiptID)),
	array('label'=>'Manage Receipt', 'url'=>array('admin')),
);*/
?>

<!--<h1>Update Receipt <?php /*echo $model->ReceiptID; */?></h1>-->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>