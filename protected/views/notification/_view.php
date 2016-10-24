<?php
/* @var $this NotificationController */
/* @var $data Notification */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('NotificationID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NotificationID), array('view', 'id'=>$data->NotificationID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NotificationTitle')); ?>:</b>
	<?php echo CHtml::encode($data->NotificationTitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NotificationSubject')); ?>:</b>
	<?php echo CHtml::encode($data->NotificationSubject); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NotificationBody')); ?>:</b>
	<?php echo CHtml::encode($data->NotificationBody); ?>
	<br />


</div>