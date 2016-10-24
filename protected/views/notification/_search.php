<?php
/* @var $this NotificationController */
/* @var $model Notification */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'NotificationID'); ?>
		<?php echo $form->textField($model,'NotificationID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NotificationTitle'); ?>
		<?php echo $form->textField($model,'NotificationTitle',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NotificationSubject'); ?>
		<?php echo $form->textField($model,'NotificationSubject',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NotificationBody'); ?>
		<?php echo $form->textField($model,'NotificationBody',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->