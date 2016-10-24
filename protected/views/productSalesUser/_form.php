<?php
/* @var $this ProductSalesUserController */
/* @var $model ProductSalesUser */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-sales-user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ProductSalesID'); ?>
		<?php echo $form->textField($model,'ProductSalesID'); ?>
		<?php echo $form->error($model,'ProductSalesID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UserID'); ?>
		<?php echo $form->textField($model,'UserID'); ?>
		<?php echo $form->error($model,'UserID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ProductSalesUserPrice'); ?>
		<?php echo $form->textField($model,'ProductSalesUserPrice'); ?>
		<?php echo $form->error($model,'ProductSalesUserPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ProductSalesUserAddDate'); ?>
		<?php echo $form->textField($model,'ProductSalesUserAddDate'); ?>
		<?php echo $form->error($model,'ProductSalesUserAddDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->