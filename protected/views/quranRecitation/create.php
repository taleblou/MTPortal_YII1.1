<?php
/* @var $this QuranRecitationController */
/* @var $model QuranRecitation */

$this->breadcrumbs=array(
	'Quran Recitations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List QuranRecitation', 'url'=>array('index')),
	array('label'=>'Manage QuranRecitation', 'url'=>array('admin')),
);
?>

<h1>Create QuranRecitation</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>