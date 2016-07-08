<?php

/**
 * This is the model class for table "{{sms_cook}}".
 *
 * The followings are the available columns in table '{{sms_cook}}':
 * @property string $SMSCookName
 * @property string $SMSCookDiscription
 * @property integer $SMSCook
 */
class SmsCook extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sms_cook}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SMSCookName', 'length', 'max'=>255),
			array('SMSCookDiscription', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('SMSCookName, SMSCookDiscription, SMSCook', 'safe', 'on'=>'search'),
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
			'SMSCookName' => 'Smscook Name',
			'SMSCookDiscription' => 'Smscook Discription',
			'SMSCook' => 'Smscook',
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

		$criteria->compare('SMSCookName',$this->SMSCookName,true);
		$criteria->compare('SMSCookDiscription',$this->SMSCookDiscription,true);
		$criteria->compare('SMSCook',$this->SMSCook);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SmsCook the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
