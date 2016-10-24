<?php
$this->breadcrumbs=array(
	'Regimes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Regime','url'=>array('index')),
	array('label'=>'Create Regime','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('regime-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Regimes</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'regime-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'RegimeID',
		'RegimeUserID',
		'RegimeSex',
		'RegimeWeight',
		'RegimeStatus',
		'RegimeAge',
		/*
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
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
