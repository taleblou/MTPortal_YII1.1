<?php
/* @var $this BannerController */
/* @var $model Banner */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'BannerID'); ?>
		<?php echo $form->textField($model,'BannerID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BannerCount'); ?>
		<?php echo $form->textField($model,'BannerCount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BannerStatuse'); ?>
		<?php echo $form->textField($model,'BannerStatuse'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->