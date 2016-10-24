<?php
$this->breadcrumbs=array(
	'Regimes'=>array('index'),
	$model->RegimeID,
);

$this->menu=array(
	array('label'=>'List Regime','url'=>array('index')),
	array('label'=>'Create Regime','url'=>array('create')),
	array('label'=>'Update Regime','url'=>array('update','id'=>$model->RegimeID)),
	array('label'=>'Delete Regime','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->RegimeID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Regime','url'=>array('admin')),
);
?>

<h1>View Regime #<?php echo $model->RegimeID; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'RegimeID',
		'RegimeUserID',
		'RegimeSex',
		'RegimeWeight',
		'RegimeStatus',
		'RegimeAge',
		'RegimeWrist',
		'RegimeDayliAction',
		'RegimeJob',
		'RegimeTypeSport',
		'RegimeTimeSport',
		'RegimePregnant',
		'RegimeBreastfeeding',
		'RegimeFamilyDiseaseType',
		'RegimeFamilyDiseaseRelationship',
		'RegimeDiseaseType',
		'RegimeDiseaseDuration',
		'RegimeDisease',
		'RegimeSpecificDisease',
		'RegimeDrug',
		'RegimeDrugDuration',
		'RegimeProblem',
		'RegimeSmoke',
		'RegimeAlcohol',
		'RegimeFBS',
		'RegimeCholesterol',
		'RegimeTriglyceride',
		'RegimeHDL',
		'RegimeLDL',
		'RegimeHvglbyn',
		'RegimeDiet',
		'RegimeDietResult',
		'RegimeSensitivityFood',
		'RegimeSensitivityType',
		'RegimeNotUsingFood',
		'RegimeDailyMealNo',
		'RegimeDailyMealNoWhy',
		'RegimeBreakfast',
		'RegimeLunch',
		'RegimeDinner',
		'RegimeBetweenMeals',
		'RegimeOil',
		'RegimeLikeFood',
		'RegimeNotLikeFood',
		'RegimeType',
	),
)); ?>
