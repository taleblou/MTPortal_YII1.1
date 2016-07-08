<?php

/**
 * This is the model class for table "{{sms_send}}".
 *
 * The followings are the available columns in table '{{sms_send}}':
 * @property integer $SMSSendID
 * @property string $SMSSendMobile
 * @property string $SMSSendDateTime
 * @property integer $SMSSendSMSModuleID
 * @property double $SMSSendSMSID
 * @property integer $SMSSendDelivery
 */
class SmsSend extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sms_send}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SMSSendMobile, SMSSendDateTime, SMSSendSMSModuleID, SMSSendSMSID, SMSSendDelivery', 'required'),
			array('SMSSendSMSModuleID, SMSSendDelivery', 'numerical', 'integerOnly'=>true),
			array('SMSSendSMSID', 'numerical'),
			array('SMSSendMobile', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('SMSSendID, SMSSendMobile, SMSSendDateTime, SMSSendSMSModuleID, SMSSendSMSID, SMSSendDelivery', 'safe', 'on'=>'search'),
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
			'SMSSendID' => 'Smssend',
			'SMSSendMobile' => 'Smssend Mobile',
			'SMSSendDateTime' => 'Smssend Date Time',
			'SMSSendSMSModuleID' => 'Smssend Smsmodule',
			'SMSSendSMSID' => 'Smssend Smsid',
			'SMSSendDelivery' => 'Smssend Delivery',
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

		$criteria->compare('SMSSendID',$this->SMSSendID);
		$criteria->compare('SMSSendMobile',$this->SMSSendMobile,true);
		$criteria->compare('SMSSendDateTime',$this->SMSSendDateTime,true);
		$criteria->compare('SMSSendSMSModuleID',$this->SMSSendSMSModuleID);
		$criteria->compare('SMSSendSMSID',$this->SMSSendSMSID);
		$criteria->compare('SMSSendDelivery',$this->SMSSendDelivery);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SmsSend the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
