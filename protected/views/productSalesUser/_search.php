<?php
/* @var $this ProductSalesUserController */
/* @var $model ProductSalesUser */
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
		<?php echo $form->label($model,'UserID'); ?>
		<?php echo $form->textField($model,'UserID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ProductSalesUserPrice'); ?>
		<?php echo $form->textField($model,'ProductSalesUserPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ProductSalesUserAddDate'); ?>
		<?php echo $form->textField($model,'ProductSalesUserAddDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'productSalesUser'); ?>
		<?php echo $form->textField($model,'productSalesUser'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->