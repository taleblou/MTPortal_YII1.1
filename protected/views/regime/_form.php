<?php
/* @var $this RegimeController */
/* @var $model Regime */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'regime-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeUserID'); ?>
		<?php echo $form->textField($model,'RegimeUserID'); ?>
		<?php echo $form->error($model,'RegimeUserID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeSex'); ?>
		<?php echo $form->textField($model,'RegimeSex',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeSex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeWeight'); ?>
		<?php echo $form->textField($model,'RegimeWeight',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeWeight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeStatus'); ?>
		<?php echo $form->textField($model,'RegimeStatus',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeAge'); ?>
		<?php echo $form->textField($model,'RegimeAge',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeAge'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeWrist'); ?>
		<?php echo $form->textField($model,'RegimeWrist',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeWrist'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeDayliAction'); ?>
		<?php echo $form->textField($model,'RegimeDayliAction',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeDayliAction'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeJob'); ?>
		<?php echo $form->textField($model,'RegimeJob',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeJob'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeTypeSport'); ?>
		<?php echo $form->textField($model,'RegimeTypeSport',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeTypeSport'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeTimeSport'); ?>
		<?php echo $form->textField($model,'RegimeTimeSport',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeTimeSport'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimePregnant'); ?>
		<?php echo $form->textField($model,'RegimePregnant',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimePregnant'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeBreastfeeding'); ?>
		<?php echo $form->textField($model,'RegimeBreastfeeding',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeBreastfeeding'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeFamilyDiseaseType'); ?>
		<?php echo $form->textField($model,'RegimeFamilyDiseaseType',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeFamilyDiseaseType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeFamilyDiseaseRelationship'); ?>
		<?php echo $form->textField($model,'RegimeFamilyDiseaseRelationship',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeFamilyDiseaseRelationship'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeDiseaseType'); ?>
		<?php echo $form->textField($model,'RegimeDiseaseType',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeDiseaseType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeDiseaseDuration'); ?>
		<?php echo $form->textField($model,'RegimeDiseaseDuration',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeDiseaseDuration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeDisease'); ?>
		<?php echo $form->textField($model,'RegimeDisease',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeDisease'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeSpecificDisease'); ?>
		<?php echo $form->textField($model,'RegimeSpecificDisease',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeSpecificDisease'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeDrug'); ?>
		<?php echo $form->textField($model,'RegimeDrug',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeDrug'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeDrugDuration'); ?>
		<?php echo $form->textField($model,'RegimeDrugDuration',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeDrugDuration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeProblem'); ?>
		<?php echo $form->textField($model,'RegimeProblem',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeProblem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeSmoke'); ?>
		<?php echo $form->textField($model,'RegimeSmoke',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeSmoke'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeAlcohol'); ?>
		<?php echo $form->textField($model,'RegimeAlcohol',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeAlcohol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeFBS'); ?>
		<?php echo $form->textField($model,'RegimeFBS',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeFBS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeCholesterol'); ?>
		<?php echo $form->textField($model,'RegimeCholesterol',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeCholesterol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeTriglyceride'); ?>
		<?php echo $form->textField($model,'RegimeTriglyceride',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeTriglyceride'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeHDL'); ?>
		<?php echo $form->textField($model,'RegimeHDL',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeHDL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeLDL'); ?>
		<?php echo $form->textField($model,'RegimeLDL',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeLDL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeHvglbyn'); ?>
		<?php echo $form->textField($model,'RegimeHvglbyn',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeHvglbyn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeDiet'); ?>
		<?php echo $form->textField($model,'RegimeDiet',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeDiet'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeDietResult'); ?>
		<?php echo $form->textField($model,'RegimeDietResult',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeDietResult'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeSensitivityFood'); ?>
		<?php echo $form->textField($model,'RegimeSensitivityFood',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeSensitivityFood'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeSensitivityType'); ?>
		<?php echo $form->textField($model,'RegimeSensitivityType',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeSensitivityType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeNotUsingFood'); ?>
		<?php echo $form->textField($model,'RegimeNotUsingFood',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeNotUsingFood'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeDailyMealNo'); ?>
		<?php echo $form->textField($model,'RegimeDailyMealNo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeDailyMealNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeDailyMealNoWhy'); ?>
		<?php echo $form->textField($model,'RegimeDailyMealNoWhy',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeDailyMealNoWhy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeBreakfast'); ?>
		<?php echo $form->textField($model,'RegimeBreakfast',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeBreakfast'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeLunch'); ?>
		<?php echo $form->textField($model,'RegimeLunch',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeLunch'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeDinner'); ?>
		<?php echo $form->textField($model,'RegimeDinner',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeDinner'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeBetweenMeals'); ?>
		<?php echo $form->textField($model,'RegimeBetweenMeals',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeBetweenMeals'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeOil'); ?>
		<?php echo $form->textField($model,'RegimeOil',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeOil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeLikeFood'); ?>
		<?php echo $form->textField($model,'RegimeLikeFood',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeLikeFood'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeNotLikeFood'); ?>
		<?php echo $form->textField($model,'RegimeNotLikeFood',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeNotLikeFood'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegimeType'); ?>
		<?php echo $form->textField($model,'RegimeType',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegimeType'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->