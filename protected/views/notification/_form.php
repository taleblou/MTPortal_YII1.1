<?php
/* @var $this NotificationController */
/* @var $model Notification */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'notification-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NotificationTitle'); ?>
		<?php echo $form->textField($model,'NotificationTitle',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'NotificationTitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NotificationSubject'); ?>
		<?php echo $form->textField($model,'NotificationSubject',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'NotificationSubject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NotificationBody'); ?>
		<?php echo $form->textField($model,'NotificationBody',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'NotificationBody'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->