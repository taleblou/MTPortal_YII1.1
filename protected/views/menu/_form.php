<?php
/* @var $this MenuController */
/* @var $model Menu */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'menu-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'MenuParentID'); ?>
		<?php echo $form->textField($model,'MenuParentID'); ?>
		<?php echo $form->error($model,'MenuParentID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MenuTypeLink'); ?>
		<?php echo $form->textField($model,'MenuTypeLink'); ?>
		<?php echo $form->error($model,'MenuTypeLink'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MenuModuleID'); ?>
		<?php echo $form->textField($model,'MenuModuleID'); ?>
		<?php echo $form->error($model,'MenuModuleID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MenuApproved'); ?>
		<?php echo $form->textField($model,'MenuApproved'); ?>
		<?php echo $form->error($model,'MenuApproved'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MenuOrder'); ?>
		<?php echo $form->textField($model,'MenuOrder'); ?>
		<?php echo $form->error($model,'MenuOrder'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MenuUrl'); ?>
		<?php echo $form->textField($model,'MenuUrl',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'MenuUrl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MenuTitle'); ?>
		<?php echo $form->textField($model,'MenuTitle',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'MenuTitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MenuAction'); ?>
		<?php echo $form->textField($model,'MenuAction'); ?>
		<?php echo $form->error($model,'MenuAction'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MenuShowAllPage'); ?>
		<?php echo $form->textField($model,'MenuShowAllPage'); ?>
		<?php echo $form->error($model,'MenuShowAllPage'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->