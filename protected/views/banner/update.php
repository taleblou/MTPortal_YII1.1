<?php
/* @var $this BannerController */
/* @var $model Banner */

$this->breadcrumbs=array(
	'Banners'=>array('index'),
	$model->BannerID=>array('view','id'=>$model->BannerID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Banner', 'url'=>array('index')),
	array('label'=>'Create Banner', 'url'=>array('create')),
	array('label'=>'View Banner', 'url'=>array('view', 'id'=>$model->BannerID)),
	array('label'=>'Manage Banner', 'url'=>array('admin')),
);
?>

<h1>Update Banner <?php echo $model->BannerID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>