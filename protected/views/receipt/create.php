<?php
/* @var $this ReceiptController */
/* @var $model Receipt */

$this->breadcrumbs=array(
	'Receipts'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List Receipt', 'url'=>array('index')),
	array('label'=>'Manage Receipt', 'url'=>array('admin')),
);*/
?>

<!--<h1>Create Receipt</h1>-->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>