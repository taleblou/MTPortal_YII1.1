<?php
/* @var $this ProductSalesController */
/* @var $model ProductSales */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-sales-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ProductSalesAddBy'); ?>
		<?php echo $form->textField($model,'ProductSalesAddBy'); ?>
		<?php echo $form->error($model,'ProductSalesAddBy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ProductSalesAddDate'); ?>
		<?php echo $form->textField($model,'ProductSalesAddDate'); ?>
		<?php echo $form->error($model,'ProductSalesAddDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ProductSalesProductValueID'); ?>
		<?php echo $form->textField($model,'ProductSalesProductValueID'); ?>
		<?php echo $form->error($model,'ProductSalesProductValueID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ProductSalesStatus'); ?>
		<?php echo $form->textField($model,'ProductSalesStatus'); ?>
		<?php echo $form->error($model,'ProductSalesStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ProductSalesStart'); ?>
		<?php echo $form->textField($model,'ProductSalesStart'); ?>
		<?php echo $form->error($model,'ProductSalesStart'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ProductSalesEnd'); ?>
		<?php echo $form->textField($model,'ProductSalesEnd'); ?>
		<?php echo $form->error($model,'ProductSalesEnd'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->