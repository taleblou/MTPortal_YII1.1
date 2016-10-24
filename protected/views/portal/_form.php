<?php
/* @var $this PortalController */
/* @var $model Portal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'portal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'PortalName'); ?>
		<?php echo $form->textField($model,'PortalName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'PortalName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PortalURL'); ?>
		<?php echo $form->textField($model,'PortalURL',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'PortalURL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PortalDefaultLanguageID'); ?>
		<?php echo $form->textField($model,'PortalDefaultLanguageID'); ?>
		<?php echo $form->error($model,'PortalDefaultLanguageID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PortalStyleID'); ?>
		<?php echo $form->textField($model,'PortalStyleID'); ?>
		<?php echo $form->error($model,'PortalStyleID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PortalEnabled'); ?>
		<?php echo $form->textField($model,'PortalEnabled'); ?>
		<?php echo $form->error($model,'PortalEnabled'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PortalMessageInactivity'); ?>
		<?php echo $form->textArea($model,'PortalMessageInactivity',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'PortalMessageInactivity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PortalAdminUserID'); ?>
		<?php echo $form->textField($model,'PortalAdminUserID'); ?>
		<?php echo $form->error($model,'PortalAdminUserID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PortalParentID'); ?>
		<?php echo $form->textField($model,'PortalParentID'); ?>
		<?php echo $form->error($model,'PortalParentID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->