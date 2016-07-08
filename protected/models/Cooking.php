<?php

/**
 * This is the model class for table "{{cooking}}".
 *
 * The followings are the available columns in table '{{cooking}}':
 * @property integer $CookingID
 * @property string $CookingIngredients
 * @property string $CookingDirections
 * @property string $CookingAddDate
 * @property string $CookingTitle
 * @property string $CookingDiscription
 * @property integer $CookingStatus
 */
class Cooking extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{cooking}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CookingStatus', 'required'),
			array('CookingStatus', 'numerical', 'integerOnly'=>true),
			array('CookingTitle', 'length', 'max'=>250),
			array('CookingIngredients, CookingDirections, CookingAddDate, CookingDiscription', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CookingID, CookingIngredients, CookingDirections, CookingAddDate, CookingTitle, CookingDiscription, CookingStatus', 'safe', 'on'=>'search'),
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
			'CookingID' => 'Cooking',
			'CookingIngredients' => 'Cooking Ingredients',
			'CookingDirections' => 'Cooking Directions',
			'CookingAddDate' => 'Cooking Add Date',
			'CookingTitle' => 'Cooking Title',
			'CookingDiscription' => 'Cooking Discription',
			'CookingStatus' => 'Cooking Status',
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

		$criteria->compare('CookingID',$this->CookingID);
		$criteria->compare('CookingIngredients',$this->CookingIngredients,true);
		$criteria->compare('CookingDirections',$this->CookingDirections,true);
		$criteria->compare('CookingAddDate',$this->CookingAddDate,true);
		$criteria->compare('CookingTitle',$this->CookingTitle,true);
		$criteria->compare('CookingDiscription',$this->CookingDiscription,true);
		$criteria->compare('CookingStatus',$this->CookingStatus);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cooking the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
