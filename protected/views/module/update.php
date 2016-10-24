<?php
$this->breadcrumbs=array(
	'Modules'=>array('index'),
	$model->ModuleID=>array('view','id'=>$model->ModuleID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Module','url'=>array('index')),
	array('label'=>'Create Module','url'=>array('create')),
	array('label'=>'View Module','url'=>array('view','id'=>$model->ModuleID)),
	array('label'=>'Manage Module','url'=>array('admin')),
);
?>

<h1>Update Module <?php echo $model->ModuleID; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>