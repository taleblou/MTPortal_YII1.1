<?php
/* @var $this ContactController */
/* @var $data Contact */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ContactID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ContactID), array('view', 'id'=>$data->ContactID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ContactName')); ?>:</b>
	<?php echo CHtml::encode($data->ContactName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ContactEmail')); ?>:</b>
	<?php echo CHtml::encode($data->ContactEmail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ContactBody')); ?>:</b>
	<?php echo CHtml::encode($data->ContactBody); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ContactSubject')); ?>:</b>
	<?php echo CHtml::encode($data->ContactSubject); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ContactAddDate')); ?>:</b>
	<?php echo CHtml::encode($data->ContactAddDate); ?>
	<br />


</div>