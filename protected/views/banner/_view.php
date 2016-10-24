<?php
/* @var $this BannerController */
/* @var $data Banner */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('BannerID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->BannerID), array('view', 'id'=>$data->BannerID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BannerCount')); ?>:</b>
	<?php echo CHtml::encode($data->BannerCount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BannerStatuse')); ?>:</b>
	<?php echo CHtml::encode($data->BannerStatuse); ?>
	<br />


</div>