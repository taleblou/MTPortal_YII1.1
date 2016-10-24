<?php
$this->breadcrumbs=array(
	'Pages'=>array('index'),
	$model->PageID=>array('view','id'=>$model->PageID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Page','url'=>array('index')),
	array('label'=>'Create Page','url'=>array('create')),
	array('label'=>'View Page','url'=>array('view','id'=>$model->PageID)),
	array('label'=>'Manage Page','url'=>array('admin')),
);
?>

<h1>Update Page <?php echo $model->PageID; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>