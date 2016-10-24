<?php
/* @var $this ProductSalesUserController */
/* @var $data ProductSalesUser */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('productSalesUser')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->productSalesUser), array('view', 'id'=>$data->productSalesUser)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProductSalesID')); ?>:</b>
	<?php echo CHtml::encode($data->ProductSalesID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserID')); ?>:</b>
	<?php echo CHtml::encode($data->UserID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProductSalesUserPrice')); ?>:</b>
	<?php echo CHtml::encode($data->ProductSalesUserPrice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProductSalesUserAddDate')); ?>:</b>
	<?php echo CHtml::encode($data->ProductSalesUserAddDate); ?>
	<br />


</div>