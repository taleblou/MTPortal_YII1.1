<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PortalID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PortalID),array('view','id'=>$data->PortalID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PortalName')); ?>:</b>
	<?php echo CHtml::encode($data->PortalName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PortalURL')); ?>:</b>
	<?php echo CHtml::encode($data->PortalURL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PortalDefaultLanguageID')); ?>:</b>
	<?php echo CHtml::encode($data->PortalDefaultLanguageID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PortalStyleID')); ?>:</b>
	<?php echo CHtml::encode($data->PortalStyleID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PortalEnabled')); ?>:</b>
	<?php echo CHtml::encode($data->PortalEnabled); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PortalMessageInactivity')); ?>:</b>
	<?php echo CHtml::encode($data->PortalMessageInactivity); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('PortalAdminUserID')); ?>:</b>
	<?php echo CHtml::encode($data->PortalAdminUserID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PortalParentID')); ?>:</b>
	<?php echo CHtml::encode($data->PortalParentID); ?>
	<br />

	*/ ?>

</div>