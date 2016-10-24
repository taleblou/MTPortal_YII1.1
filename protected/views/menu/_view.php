<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('MenuID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->MenuID),array('view','id'=>$data->MenuID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MenuParentID')); ?>:</b>
	<?php echo CHtml::encode($data->MenuParentID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MenuTypeLink')); ?>:</b>
	<?php echo CHtml::encode($data->MenuTypeLink); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MenuModuleID')); ?>:</b>
	<?php echo CHtml::encode($data->MenuModuleID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MenuApproved')); ?>:</b>
	<?php echo CHtml::encode($data->MenuApproved); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MenuOrder')); ?>:</b>
	<?php echo CHtml::encode($data->MenuOrder); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MenuUrl')); ?>:</b>
	<?php echo CHtml::encode($data->MenuUrl); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('MenuTitle')); ?>:</b>
	<?php echo CHtml::encode($data->MenuTitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MenuAction')); ?>:</b>
	<?php echo CHtml::encode($data->MenuAction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MenuShowAllPage')); ?>:</b>
	<?php echo CHtml::encode($data->MenuShowAllPage); ?>
	<br />

	*/ ?>

</div>