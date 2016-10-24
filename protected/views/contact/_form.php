<?php
/* @var $this ContactController */
/* @var $model Contact */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ContactName'); ?>
		<?php echo $form->textField($model,'ContactName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ContactName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ContactEmail'); ?>
		<?php echo $form->textField($model,'ContactEmail',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ContactEmail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ContactBody'); ?>
		<?php echo $form->textArea($model,'ContactBody',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ContactBody'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ContactSubject'); ?>
		<?php echo $form->textField($model,'ContactSubject',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ContactSubject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ContactAddDate'); ?>
		<?php echo $form->textField($model,'ContactAddDate'); ?>
		<?php echo $form->error($model,'ContactAddDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->