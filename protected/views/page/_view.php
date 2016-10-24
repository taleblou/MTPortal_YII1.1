<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PageID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PageID),array('view','id'=>$data->PageID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PageName')); ?>:</b>
	<?php echo CHtml::encode($data->PageName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PageOrder')); ?>:</b>
	<?php echo CHtml::encode($data->PageOrder); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PageParentID')); ?>:</b>
	<?php echo CHtml::encode($data->PageParentID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PageUrl')); ?>:</b>
	<?php echo CHtml::encode($data->PageUrl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PagePortalID')); ?>:</b>
	<?php echo CHtml::encode($data->PagePortalID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PageLanguageID')); ?>:</b>
	<?php echo CHtml::encode($data->PageLanguageID); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('PageKeywords')); ?>:</b>
	<?php echo CHtml::encode($data->PageKeywords); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PageTitle')); ?>:</b>
	<?php echo CHtml::encode($data->PageTitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PageStyleID')); ?>:</b>
	<?php echo CHtml::encode($data->PageStyleID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PageTypeLink')); ?>:</b>
	<?php echo CHtml::encode($data->PageTypeLink); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HomePage')); ?>:</b>
	<?php echo CHtml::encode($data->HomePage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PageDiscription')); ?>:</b>
	<?php echo CHtml::encode($data->PageDiscription); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PageLayouts')); ?>:</b>
	<?php echo CHtml::encode($data->PageLayouts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PageStatus')); ?>:</b>
	<?php echo CHtml::encode($data->PageStatus); ?>
	<br />

	*/ ?>

</div>