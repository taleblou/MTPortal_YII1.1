<?php
/* @var $this QuranRecitationController */
/* @var $data QuranRecitation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('QuranRecitationID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->QuranRecitationID), array('view', 'id'=>$data->QuranRecitationID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('QuranRecitationAddDate')); ?>:</b>
	<?php echo CHtml::encode($data->QuranRecitationAddDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('QuranRecitationStatus')); ?>:</b>
	<?php echo CHtml::encode($data->QuranRecitationStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('QuranRecitationPage')); ?>:</b>
	<?php echo CHtml::encode($data->QuranRecitationPage); ?>
	<br />


</div>