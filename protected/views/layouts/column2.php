<?php Yii::app()->bootstrap->register(); ?>
<?php /* @var $this Controller */
$page=0;
$admin="Module.widgets.ModuleZoneWidget";
if (isset($_GET['pid'])) {
    $page=$_GET['pid'];
}
if (isset($_GET['admin'])) {
    $admin="Module.widgets.ModuleBoxWidget";
}?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
        <?php $this->widget($admin,array('PageID'=>$page,'Zone'=>'Zone1'));?>
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
        <?php

        $this->widget($admin,array('PageID'=>$page,'Zone'=>'Zone2'));?>
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>