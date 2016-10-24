<?php
$this->breadcrumbs=array(
	'Menus'=>array('index'),
	$model->MenuID,
);

$this->menu=array(
	array('label'=>'List Menu','url'=>array('index')),
	array('label'=>'Create Menu','url'=>array('create')),
	array('label'=>'Update Menu','url'=>array('update','id'=>$model->MenuID)),
	array('label'=>'Delete Menu','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->MenuID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Menu','url'=>array('admin')),
);
?>

<h1>View Menu #<?php echo $model->MenuID; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'MenuID',
		'MenuParentID',
		'MenuTypeLink',
		'MenuModuleID',
		'MenuApproved',
		'MenuOrder',
		'MenuUrl',
		'MenuTitle',
		'MenuAction',
		'MenuShowAllPage',
	),
)); ?>
