<?php
$this->breadcrumbs=array(
	'Modules'=>array('index'),
	$model->ModuleID,
);

$this->menu=array(
	array('label'=>'List Module','url'=>array('index')),
	array('label'=>'Create Module','url'=>array('create')),
	array('label'=>'Update Module','url'=>array('update','id'=>$model->ModuleID)),
	array('label'=>'Delete Module','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->ModuleID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Module','url'=>array('admin')),
);
?>

<h1>View Module #<?php echo $model->ModuleID; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'ModuleID',
		'ModuleDefID',
		'ModuleOrder',
		'ModuleShowinAllPage',
		'ModuleTitle',
		'ModuleSkin',
		'ModulePortalID',
		'ModuleZone',
		'ModulePageID',
		'ModuleLanguageID',
		'ModuleStyleID',
		'ModuleStatus',
		'ModuleCopyID',
	),
)); ?>
