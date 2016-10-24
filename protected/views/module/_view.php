<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ModuleID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ModuleID),array('view','id'=>$data->ModuleID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ModuleDefID')); ?>:</b>
	<?php echo CHtml::encode($data->ModuleDefID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ModuleOrder')); ?>:</b>
	<?php echo CHtml::encode($data->ModuleOrder); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ModuleShowinAllPage')); ?>:</b>
	<?php echo CHtml::encode($data->ModuleShowinAllPage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ModuleTitle')); ?>:</b>
	<?php echo CHtml::encode($data->ModuleTitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ModuleSkin')); ?>:</b>
	<?php echo CHtml::encode($data->ModuleSkin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ModulePortalID')); ?>:</b>
	<?php echo CHtml::encode($data->ModulePortalID); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ModuleZone')); ?>:</b>
	<?php echo CHtml::encode($data->ModuleZone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ModulePageID')); ?>:</b>
	<?php echo CHtml::encode($data->ModulePageID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ModuleLanguageID')); ?>:</b>
	<?php echo CHtml::encode($data->ModuleLanguageID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ModuleStyleID')); ?>:</b>
	<?php echo CHtml::encode($data->ModuleStyleID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ModuleStatus')); ?>:</b>
	<?php echo CHtml::encode($data->ModuleStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ModuleCopyID')); ?>:</b>
	<?php echo CHtml::encode($data->ModuleCopyID); ?>
	<br />

	*/ ?>

</div>