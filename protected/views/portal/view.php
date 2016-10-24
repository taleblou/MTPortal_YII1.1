<?php
$this->breadcrumbs=array(
	'Portals'=>array('index'),
	$model->PortalID,
);

$this->menu=array(
	array('label'=>'List Portal','url'=>array('index')),
	array('label'=>'Create Portal','url'=>array('create')),
	array('label'=>'Update Portal','url'=>array('update','id'=>$model->PortalID)),
	array('label'=>'Delete Portal','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->PortalID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Portal','url'=>array('admin')),
);
?>

<h1>View Portal #<?php echo $model->PortalID; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'PortalID',
		'PortalName',
		'PortalURL',
		'PortalDefaultLanguageID',
		'PortalStyleID',
		'PortalEnabled',
		'PortalMessageInactivity',
		'PortalAdminUserID',
		'PortalParentID',
	),
)); ?>
