<?php
/* @var $this ReceiptController */
/* @var $model Receipt */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ReceiptID'); ?>
		<?php echo $form->textField($model,'ReceiptID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ReceiptUserID'); ?>
		<?php echo $form->textField($model,'ReceiptUserID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ReceiptAddDate'); ?>
		<?php echo $form->textField($model,'ReceiptAddDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->