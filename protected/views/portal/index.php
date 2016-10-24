<?php
$this->breadcrumbs=array(
	'Portals',
);

$this->menu=array(
	array('label'=>'Create Portal','url'=>array('create')),
	array('label'=>'Manage Portal','url'=>array('admin')),
);
?>

<h1>Portals</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
