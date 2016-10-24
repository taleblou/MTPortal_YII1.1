<?php
$this->breadcrumbs=array(
	'Pages'=>array('index'),
	$model->PageID,
);

$this->menu=array(
	array('label'=>'List Page','url'=>array('index')),
	array('label'=>'Create Page','url'=>array('create')),
	array('label'=>'Update Page','url'=>array('update','id'=>$model->PageID)),
	array('label'=>'Delete Page','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->PageID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Page','url'=>array('admin')),
);
?>

<h1>View Page #<?php echo $model->PageID; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'PageID',
		'PageName',
		'PageOrder',
		'PageParentID',
		'PageUrl',
		'PagePortalID',
		'PageLanguageID',
		'PageKeywords',
		'PageTitle',
		'PageStyleID',
		'PageTypeLink',
		'HomePage',
		'PageDiscription',
		'PageLayouts',
		'PageStatus',
	),
)); ?>
