<?php
/* @var $this ProductSalesController */
/* @var $model ProductSales */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ProductSalesID'); ?>
		<?php echo $form->textField($model,'ProductSalesID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ProductSalesAddBy'); ?>
		<?php echo $form->textField($model,'ProductSalesAddBy'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ProductSalesAddDate'); ?>
		<?php echo $form->textField($model,'ProductSalesAddDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ProductSalesProductValueID'); ?>
		<?php echo $form->textField($model,'ProductSalesProductValueID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ProductSalesStatus'); ?>
		<?php echo $form->textField($model,'ProductSalesStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ProductSalesStart'); ?>
		<?php echo $form->textField($model,'ProductSalesStart'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ProductSalesEnd'); ?>
		<?php echo $form->textField($model,'ProductSalesEnd'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->