<?php
/* @var $this QuranRecitationController */
/* @var $model QuranRecitation */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'QuranRecitationID'); ?>
		<?php echo $form->textField($model,'QuranRecitationID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'QuranRecitationAddDate'); ?>
		<?php echo $form->textField($model,'QuranRecitationAddDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'QuranRecitationStatus'); ?>
		<?php echo $form->textField($model,'QuranRecitationStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'QuranRecitationPage'); ?>
		<?php echo $form->textField($model,'QuranRecitationPage'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->