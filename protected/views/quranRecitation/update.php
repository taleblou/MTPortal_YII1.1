<?php
/* @var $this QuranRecitationController */
/* @var $model QuranRecitation */

$this->breadcrumbs=array(
	'Quran Recitations'=>array('index'),
	$model->QuranRecitationID=>array('view','id'=>$model->QuranRecitationID),
	'Update',
);

$this->menu=array(
	array('label'=>'List QuranRecitation', 'url'=>array('index')),
	array('label'=>'Create QuranRecitation', 'url'=>array('create')),
	array('label'=>'View QuranRecitation', 'url'=>array('view', 'id'=>$model->QuranRecitationID)),
	array('label'=>'Manage QuranRecitation', 'url'=>array('admin')),
);
?>

<h1>Update QuranRecitation <?php echo $model->QuranRecitationID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>