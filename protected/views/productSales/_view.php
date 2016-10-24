<?php
/* @var $this ProductSalesController */
/* @var $data ProductSales */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProductSalesID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ProductSalesID), array('view', 'id'=>$data->ProductSalesID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProductSalesAddBy')); ?>:</b>
	<?php echo CHtml::encode($data->ProductSalesAddBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProductSalesAddDate')); ?>:</b>
	<?php echo CHtml::encode($data->ProductSalesAddDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProductSalesProductValueID')); ?>:</b>
	<?php echo CHtml::encode($data->ProductSalesProductValueID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProductSalesStatus')); ?>:</b>
	<?php echo CHtml::encode($data->ProductSalesStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProductSalesStart')); ?>:</b>
	<?php echo CHtml::encode($data->ProductSalesStart); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProductSalesEnd')); ?>:</b>
	<?php echo CHtml::encode($data->ProductSalesEnd); ?>
	<br />


</div>