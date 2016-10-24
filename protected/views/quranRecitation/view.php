<?php
/* @var $this QuranRecitationController */
/* @var $model QuranRecitation */

$this->breadcrumbs=array(
	'Quran Recitations'=>array('index'),
	$model->QuranRecitationID,
);

$this->menu=array(
	array('label'=>'List QuranRecitation', 'url'=>array('index')),
	array('label'=>'Create QuranRecitation', 'url'=>array('create')),
	array('label'=>'Update QuranRecitation', 'url'=>array('update', 'id'=>$model->QuranRecitationID)),
	array('label'=>'Delete QuranRecitation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->QuranRecitationID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage QuranRecitation', 'url'=>array('admin')),
);
?>

<h1>View QuranRecitation #<?php echo $model->QuranRecitationID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'QuranRecitationID',
		'QuranRecitationAddDate',
		'QuranRecitationStatus',
		'QuranRecitationPage',
	),
)); ?>
