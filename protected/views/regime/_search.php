<?php
/* @var $this RegimeController */
/* @var $model Regime */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'RegimeID'); ?>
		<?php echo $form->textField($model,'RegimeID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeUserID'); ?>
		<?php echo $form->textField($model,'RegimeUserID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeSex'); ?>
		<?php echo $form->textField($model,'RegimeSex',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeWeight'); ?>
		<?php echo $form->textField($model,'RegimeWeight',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeStatus'); ?>
		<?php echo $form->textField($model,'RegimeStatus',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeAge'); ?>
		<?php echo $form->textField($model,'RegimeAge',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeWrist'); ?>
		<?php echo $form->textField($model,'RegimeWrist',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeDayliAction'); ?>
		<?php echo $form->textField($model,'RegimeDayliAction',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeJob'); ?>
		<?php echo $form->textField($model,'RegimeJob',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeTypeSport'); ?>
		<?php echo $form->textField($model,'RegimeTypeSport',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeTimeSport'); ?>
		<?php echo $form->textField($model,'RegimeTimeSport',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimePregnant'); ?>
		<?php echo $form->textField($model,'RegimePregnant',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeBreastfeeding'); ?>
		<?php echo $form->textField($model,'RegimeBreastfeeding',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeFamilyDiseaseType'); ?>
		<?php echo $form->textField($model,'RegimeFamilyDiseaseType',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeFamilyDiseaseRelationship'); ?>
		<?php echo $form->textField($model,'RegimeFamilyDiseaseRelationship',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeDiseaseType'); ?>
		<?php echo $form->textField($model,'RegimeDiseaseType',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeDiseaseDuration'); ?>
		<?php echo $form->textField($model,'RegimeDiseaseDuration',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeDisease'); ?>
		<?php echo $form->textField($model,'RegimeDisease',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeSpecificDisease'); ?>
		<?php echo $form->textField($model,'RegimeSpecificDisease',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeDrug'); ?>
		<?php echo $form->textField($model,'RegimeDrug',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeDrugDuration'); ?>
		<?php echo $form->textField($model,'RegimeDrugDuration',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeProblem'); ?>
		<?php echo $form->textField($model,'RegimeProblem',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeSmoke'); ?>
		<?php echo $form->textField($model,'RegimeSmoke',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeAlcohol'); ?>
		<?php echo $form->textField($model,'RegimeAlcohol',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeFBS'); ?>
		<?php echo $form->textField($model,'RegimeFBS',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeCholesterol'); ?>
		<?php echo $form->textField($model,'RegimeCholesterol',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeTriglyceride'); ?>
		<?php echo $form->textField($model,'RegimeTriglyceride',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeHDL'); ?>
		<?php echo $form->textField($model,'RegimeHDL',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeLDL'); ?>
		<?php echo $form->textField($model,'RegimeLDL',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeHvglbyn'); ?>
		<?php echo $form->textField($model,'RegimeHvglbyn',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeDiet'); ?>
		<?php echo $form->textField($model,'RegimeDiet',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeDietResult'); ?>
		<?php echo $form->textField($model,'RegimeDietResult',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeSensitivityFood'); ?>
		<?php echo $form->textField($model,'RegimeSensitivityFood',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeSensitivityType'); ?>
		<?php echo $form->textField($model,'RegimeSensitivityType',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeNotUsingFood'); ?>
		<?php echo $form->textField($model,'RegimeNotUsingFood',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeDailyMealNo'); ?>
		<?php echo $form->textField($model,'RegimeDailyMealNo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeDailyMealNoWhy'); ?>
		<?php echo $form->textField($model,'RegimeDailyMealNoWhy',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeBreakfast'); ?>
		<?php echo $form->textField($model,'RegimeBreakfast',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeLunch'); ?>
		<?php echo $form->textField($model,'RegimeLunch',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeDinner'); ?>
		<?php echo $form->textField($model,'RegimeDinner',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeBetweenMeals'); ?>
		<?php echo $form->textField($model,'RegimeBetweenMeals',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeOil'); ?>
		<?php echo $form->textField($model,'RegimeOil',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeLikeFood'); ?>
		<?php echo $form->textField($model,'RegimeLikeFood',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeNotLikeFood'); ?>
		<?php echo $form->textField($model,'RegimeNotLikeFood',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegimeType'); ?>
		<?php echo $form->textField($model,'RegimeType',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->