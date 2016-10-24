<?php
/* @var $this RegimeController */
/* @var $model Regime */

$this->breadcrumbs=array(
	'Regimes'=>array('index'),
	$model->RegimeID=>array('view','id'=>$model->RegimeID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Regime', 'url'=>array('index')),
	array('label'=>'Create Regime', 'url'=>array('create')),
	array('label'=>'View Regime', 'url'=>array('view', 'id'=>$model->RegimeID)),
	array('label'=>'Manage Regime', 'url'=>array('admin')),
);
?>

<h1>Update Regime <?php echo $model->RegimeID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>