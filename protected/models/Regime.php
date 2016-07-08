<?php

/**
 * This is the model class for table "{{regime}}".
 *
 * The followings are the available columns in table '{{regime}}':
 * @property integer $RegimeID
 * @property integer $RegimeUserID
 * @property integer $RegimeSex
 * @property integer $RegimeWeight
 * @property integer $RegimeStatus
 * @property integer $RegimeAge
 * @property integer $RegimeWrist
 * @property integer $RegimeDayliAction
 * @property integer $RegimeJob
 * @property integer $RegimeTypeSport
 * @property integer $RegimeTimeSport
 * @property integer $RegimePregnant
 * @property integer $RegimeBreastfeeding
 * @property integer $RegimeFamilyDiseaseType
 * @property integer $RegimeFamilyDiseaseRelationship
 * @property integer $RegimeDiseaseType
 * @property integer $RegimeDiseaseDuration
 * @property integer $RegimeDisease
 * @property integer $RegimeSpecificDisease
 * @property integer $RegimeDrug
 * @property integer $RegimeDrugDuration
 * @property integer $RegimeProblem
 * @property integer $RegimeSmoke
 * @property integer $RegimeAlcohol
 * @property integer $RegimeFBS
 * @property integer $RegimeCholesterol
 * @property integer $RegimeTriglyceride
 * @property integer $RegimeHDL
 * @property integer $RegimeLDL
 * @property integer $RegimeHvglbyn
 * @property integer $RegimeDiet
 * @property integer $RegimeDietResult
 * @property integer $RegimeSensitivityFood
 * @property integer $RegimeSensitivityType
 * @property integer $RegimeNotUsingFood
 * @property integer $RegimeDailyMealNo
 * @property integer $RegimeDailyMealNoWhy
 * @property integer $RegimeBreakfast
 * @property integer $RegimeLunch
 * @property integer $RegimeDinner
 * @property integer $RegimeBetweenMeals
 * @property integer $RegimeOil
 * @property integer $RegimeLikeFood
 * @property integer $RegimeNotLikeFood
 * @property integer $RegimeType
 */
class Regime extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{regime}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RegimeID, RegimeUserID, RegimeSex, RegimeWeight, RegimeStatus, RegimeAge, RegimeWrist, RegimeDayliAction, RegimeJob, RegimeTypeSport, RegimeTimeSport, RegimePregnant, RegimeBreastfeeding, RegimeFamilyDiseaseType, RegimeFamilyDiseaseRelationship, RegimeDiseaseType, RegimeDiseaseDuration, RegimeDisease, RegimeSpecificDisease, RegimeDrug, RegimeDrugDuration, RegimeProblem, RegimeSmoke, RegimeAlcohol, RegimeFBS, RegimeCholesterol, RegimeTriglyceride, RegimeHDL, RegimeLDL, RegimeHvglbyn, RegimeDiet, RegimeDietResult, RegimeSensitivityFood, RegimeSensitivityType, RegimeNotUsingFood, RegimeDailyMealNo, RegimeDailyMealNoWhy, RegimeBreakfast, RegimeLunch, RegimeDinner, RegimeBetweenMeals, RegimeOil, RegimeLikeFood, RegimeNotLikeFood, RegimeType', 'required'),
			array('RegimeID, RegimeUserID, RegimeSex, RegimeWeight, RegimeStatus, RegimeAge, RegimeWrist, RegimeDayliAction, RegimeJob, RegimeTypeSport, RegimeTimeSport, RegimePregnant, RegimeBreastfeeding, RegimeFamilyDiseaseType, RegimeFamilyDiseaseRelationship, RegimeDiseaseType, RegimeDiseaseDuration, RegimeDisease, RegimeSpecificDisease, RegimeDrug, RegimeDrugDuration, RegimeProblem, RegimeSmoke, RegimeAlcohol, RegimeFBS, RegimeCholesterol, RegimeTriglyceride, RegimeHDL, RegimeLDL, RegimeHvglbyn, RegimeDiet, RegimeDietResult, RegimeSensitivityFood, RegimeSensitivityType, RegimeNotUsingFood, RegimeDailyMealNo, RegimeDailyMealNoWhy, RegimeBreakfast, RegimeLunch, RegimeDinner, RegimeBetweenMeals, RegimeOil, RegimeLikeFood, RegimeNotLikeFood, RegimeType', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RegimeID, RegimeUserID, RegimeSex, RegimeWeight, RegimeStatus, RegimeAge, RegimeWrist, RegimeDayliAction, RegimeJob, RegimeTypeSport, RegimeTimeSport, RegimePregnant, RegimeBreastfeeding, RegimeFamilyDiseaseType, RegimeFamilyDiseaseRelationship, RegimeDiseaseType, RegimeDiseaseDuration, RegimeDisease, RegimeSpecificDisease, RegimeDrug, RegimeDrugDuration, RegimeProblem, RegimeSmoke, RegimeAlcohol, RegimeFBS, RegimeCholesterol, RegimeTriglyceride, RegimeHDL, RegimeLDL, RegimeHvglbyn, RegimeDiet, RegimeDietResult, RegimeSensitivityFood, RegimeSensitivityType, RegimeNotUsingFood, RegimeDailyMealNo, RegimeDailyMealNoWhy, RegimeBreakfast, RegimeLunch, RegimeDinner, RegimeBetweenMeals, RegimeOil, RegimeLikeFood, RegimeNotLikeFood, RegimeType', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RegimeID' => 'Regime',
			'RegimeUserID' => 'Regime User',
			'RegimeSex' => 'Regime Sex',
			'RegimeWeight' => 'Regime Weight',
			'RegimeStatus' => 'Regime Status',
			'RegimeAge' => 'Regime Age',
			'RegimeWrist' => 'Regime Wrist',
			'RegimeDayliAction' => 'Regime Dayli Action',
			'RegimeJob' => 'Regime Job',
			'RegimeTypeSport' => 'Regime Type Sport',
			'RegimeTimeSport' => 'Regime Time Sport',
			'RegimePregnant' => 'Regime Pregnant',
			'RegimeBreastfeeding' => 'Regime Breastfeeding',
			'RegimeFamilyDiseaseType' => 'Regime Family Disease Type',
			'RegimeFamilyDiseaseRelationship' => 'Regime Family Disease Relationship',
			'RegimeDiseaseType' => 'Regime Disease Type',
			'RegimeDiseaseDuration' => 'Regime Disease Duration',
			'RegimeDisease' => 'Regime Disease',
			'RegimeSpecificDisease' => 'Regime Specific Disease',
			'RegimeDrug' => 'Regime Drug',
			'RegimeDrugDuration' => 'Regime Drug Duration',
			'RegimeProblem' => 'Regime Problem',
			'RegimeSmoke' => 'Regime Smoke',
			'RegimeAlcohol' => 'Regime Alcohol',
			'RegimeFBS' => 'Regime Fbs',
			'RegimeCholesterol' => 'Regime Cholesterol',
			'RegimeTriglyceride' => 'Regime Triglyceride',
			'RegimeHDL' => 'Regime Hdl',
			'RegimeLDL' => 'Regime Ldl',
			'RegimeHvglbyn' => 'Regime Hvglbyn',
			'RegimeDiet' => 'Regime Diet',
			'RegimeDietResult' => 'Regime Diet Result',
			'RegimeSensitivityFood' => 'Regime Sensitivity Food',
			'RegimeSensitivityType' => 'Regime Sensitivity Type',
			'RegimeNotUsingFood' => 'Regime Not Using Food',
			'RegimeDailyMealNo' => 'Regime Daily Meal No',
			'RegimeDailyMealNoWhy' => 'Regime Daily Meal No Why',
			'RegimeBreakfast' => 'Regime Breakfast',
			'RegimeLunch' => 'Regime Lunch',
			'RegimeDinner' => 'Regime Dinner',
			'RegimeBetweenMeals' => 'Regime Between Meals',
			'RegimeOil' => 'Regime Oil',
			'RegimeLikeFood' => 'Regime Like Food',
			'RegimeNotLikeFood' => 'Regime Not Like Food',
			'RegimeType' => 'Regime Type',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('RegimeID',$this->RegimeID);
		$criteria->compare('RegimeUserID',$this->RegimeUserID);
		$criteria->compare('RegimeSex',$this->RegimeSex);
		$criteria->compare('RegimeWeight',$this->RegimeWeight);
		$criteria->compare('RegimeStatus',$this->RegimeStatus);
		$criteria->compare('RegimeAge',$this->RegimeAge);
		$criteria->compare('RegimeWrist',$this->RegimeWrist);
		$criteria->compare('RegimeDayliAction',$this->RegimeDayliAction);
		$criteria->compare('RegimeJob',$this->RegimeJob);
		$criteria->compare('RegimeTypeSport',$this->RegimeTypeSport);
		$criteria->compare('RegimeTimeSport',$this->RegimeTimeSport);
		$criteria->compare('RegimePregnant',$this->RegimePregnant);
		$criteria->compare('RegimeBreastfeeding',$this->RegimeBreastfeeding);
		$criteria->compare('RegimeFamilyDiseaseType',$this->RegimeFamilyDiseaseType);
		$criteria->compare('RegimeFamilyDiseaseRelationship',$this->RegimeFamilyDiseaseRelationship);
		$criteria->compare('RegimeDiseaseType',$this->RegimeDiseaseType);
		$criteria->compare('RegimeDiseaseDuration',$this->RegimeDiseaseDuration);
		$criteria->compare('RegimeDisease',$this->RegimeDisease);
		$criteria->compare('RegimeSpecificDisease',$this->RegimeSpecificDisease);
		$criteria->compare('RegimeDrug',$this->RegimeDrug);
		$criteria->compare('RegimeDrugDuration',$this->RegimeDrugDuration);
		$criteria->compare('RegimeProblem',$this->RegimeProblem);
		$criteria->compare('RegimeSmoke',$this->RegimeSmoke);
		$criteria->compare('RegimeAlcohol',$this->RegimeAlcohol);
		$criteria->compare('RegimeFBS',$this->RegimeFBS);
		$criteria->compare('RegimeCholesterol',$this->RegimeCholesterol);
		$criteria->compare('RegimeTriglyceride',$this->RegimeTriglyceride);
		$criteria->compare('RegimeHDL',$this->RegimeHDL);
		$criteria->compare('RegimeLDL',$this->RegimeLDL);
		$criteria->compare('RegimeHvglbyn',$this->RegimeHvglbyn);
		$criteria->compare('RegimeDiet',$this->RegimeDiet);
		$criteria->compare('RegimeDietResult',$this->RegimeDietResult);
		$criteria->compare('RegimeSensitivityFood',$this->RegimeSensitivityFood);
		$criteria->compare('RegimeSensitivityType',$this->RegimeSensitivityType);
		$criteria->compare('RegimeNotUsingFood',$this->RegimeNotUsingFood);
		$criteria->compare('RegimeDailyMealNo',$this->RegimeDailyMealNo);
		$criteria->compare('RegimeDailyMealNoWhy',$this->RegimeDailyMealNoWhy);
		$criteria->compare('RegimeBreakfast',$this->RegimeBreakfast);
		$criteria->compare('RegimeLunch',$this->RegimeLunch);
		$criteria->compare('RegimeDinner',$this->RegimeDinner);
		$criteria->compare('RegimeBetweenMeals',$this->RegimeBetweenMeals);
		$criteria->compare('RegimeOil',$this->RegimeOil);
		$criteria->compare('RegimeLikeFood',$this->RegimeLikeFood);
		$criteria->compare('RegimeNotLikeFood',$this->RegimeNotLikeFood);
		$criteria->compare('RegimeType',$this->RegimeType);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Regime the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
