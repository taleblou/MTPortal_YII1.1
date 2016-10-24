<?php
/* @var $this ReceiptController */
/* @var $data Receipt */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ReceiptID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ReceiptID), array('view', 'id'=>$data->ReceiptID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ReceiptUserID')); ?>:</b>
	<?php echo CHtml::encode($data->ReceiptUserID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ReceiptAddDate')); ?>:</b>
	<?php echo CHtml::encode($data->ReceiptAddDate); ?>
	<br />


</div>