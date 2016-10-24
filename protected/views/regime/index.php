<?php
/* @var $this RegimeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Regimes',
);

$this->menu=array(
	array('label'=>'Create Regime', 'url'=>array('create')),
	array('label'=>'Manage Regime', 'url'=>array('admin')),
);
?>

<h1>Regimes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
