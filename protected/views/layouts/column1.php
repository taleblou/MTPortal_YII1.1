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
<div id="content">
	<?php echo $content; ?>
    <?php $this->widget($admin,array('PageID'=>$page,'Zone'=>'Zone1'));?>
    <?php
    /* @var $this SiteController */

    $this->pageTitle=Yii::app()->name;
  //  $this->widget($page->PageKeywords);

    ?>
</div><!-- content -->
<?php $this->endContent(); ?>