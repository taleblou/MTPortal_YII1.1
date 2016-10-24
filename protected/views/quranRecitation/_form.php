<?php
/* @var $this QuranRecitationController */
/* @var $model QuranRecitation */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'quran-recitation-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'QuranRecitationAddDate'); ?>
		<?php echo $form->textField($model,'QuranRecitationAddDate'); ?>
		<?php echo $form->error($model,'QuranRecitationAddDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'QuranRecitationStatus'); ?>
		<?php echo $form->textField($model,'QuranRecitationStatus'); ?>
		<?php echo $form->error($model,'QuranRecitationStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'QuranRecitationPage'); ?>
		<?php echo $form->textField($model,'QuranRecitationPage'); ?>
		<?php echo $form->error($model,'QuranRecitationPage'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->