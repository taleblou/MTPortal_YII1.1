<?php

/**
 * This is the model class for table "{{sms_contact}}".
 *
 * The followings are the available columns in table '{{sms_contact}}':
 * @property string $SMSContactID
 * @property string $SMSContactName
 * @property string $SMSContactLastName
 * @property integer $SMSContactGroupID
 * @property integer $SMSContactMobile
 * @property string $SMSContactCompany
 * @property string $SMSContactEmail
 */
class SmsContact extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sms_contact}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SMSContactID, SMSContactName, SMSContactGroupID, SMSContactMobile', 'required'),
			array('SMSContactGroupID, SMSContactMobile', 'numerical', 'integerOnly'=>true),
			array('SMSContactID', 'length', 'max'=>45),
			array('SMSContactName, SMSContactLastName', 'length', 'max'=>50),
			array('SMSContactCompany', 'length', 'max'=>250),
			array('SMSContactEmail', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('SMSContactID, SMSContactName, SMSContactLastName, SMSContactGroupID, SMSContactMobile, SMSContactCompany, SMSContactEmail', 'safe', 'on'=>'search'),
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
			'SMSContactID' => 'Smscontact',
			'SMSContactName' => 'Smscontact Name',
			'SMSContactLastName' => 'Smscontact Last Name',
			'SMSContactGroupID' => 'Smscontact Group',
			'SMSContactMobile' => 'Smscontact Mobile',
			'SMSContactCompany' => 'Smscontact Company',
			'SMSContactEmail' => 'Smscontact Email',
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

		$criteria->compare('SMSContactID',$this->SMSContactID,true);
		$criteria->compare('SMSContactName',$this->SMSContactName,true);
		$criteria->compare('SMSContactLastName',$this->SMSContactLastName,true);
		$criteria->compare('SMSContactGroupID',$this->SMSContactGroupID);
		$criteria->compare('SMSContactMobile',$this->SMSContactMobile);
		$criteria->compare('SMSContactCompany',$this->SMSContactCompany,true);
		$criteria->compare('SMSContactEmail',$this->SMSContactEmail,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SmsContact the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
