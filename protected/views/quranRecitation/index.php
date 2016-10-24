<?php
/* @var $this QuranRecitationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Quran Recitations',
);

$this->menu=array(
	array('label'=>'Create QuranRecitation', 'url'=>array('create')),
	array('label'=>'Manage QuranRecitation', 'url'=>array('admin')),
);
?>

<h1>Quran Recitations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
