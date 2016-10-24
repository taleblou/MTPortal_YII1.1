<?php
$this->breadcrumbs=array(
	'Menus'=>array('index'),
	$model->MenuID=>array('view','id'=>$model->MenuID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Menu','url'=>array('index')),
	array('label'=>'Create Menu','url'=>array('create')),
	array('label'=>'View Menu','url'=>array('view','id'=>$model->MenuID)),
	array('label'=>'Manage Menu','url'=>array('admin')),
);
?>

<h1>Update Menu <?php echo $model->MenuID; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>