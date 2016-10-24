<?php
/* @var $this ContactController */
/* @var $model Contact */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ContactID'); ?>
		<?php echo $form->textField($model,'ContactID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ContactName'); ?>
		<?php echo $form->textField($model,'ContactName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ContactEmail'); ?>
		<?php echo $form->textField($model,'ContactEmail',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ContactBody'); ?>
		<?php echo $form->textArea($model,'ContactBody',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ContactSubject'); ?>
		<?php echo $form->textField($model,'ContactSubject',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ContactAddDate'); ?>
		<?php echo $form->textField($model,'ContactAddDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->