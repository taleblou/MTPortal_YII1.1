<?php

/**
 * This is the model class for table "{{sms_provider}}".
 *
 * The followings are the available columns in table '{{sms_provider}}':
 * @property integer $SMSProviderID
 * @property integer $SMSProviderName
 * @property integer $SMSProviderNumber
 * @property integer $SMSProviderStatus
 * @property string $SMSPassword
 * @property string $SMSUserName
 * @property string $SMSProxyAddress
 *
 * The followings are the available model relations:
 * @property SmsModule[] $smsModules
 * @property SmsRecive[] $smsRecives
 */
class SmsProvider extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sms_provider}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SMSProviderNumber', 'required'),
			array('SMSProviderName, SMSProviderNumber, SMSProviderStatus', 'numerical', 'integerOnly'=>true),
			array('SMSPassword, SMSUserName, SMSProxyAddress', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('SMSProviderID, SMSProviderName, SMSProviderNumber, SMSProviderStatus, SMSPassword, SMSUserName, SMSProxyAddress', 'safe', 'on'=>'search'),
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
			'smsModules' => array(self::HAS_MANY, 'SmsModule', 'SMSModuleProviderID'),
			'smsRecives' => array(self::HAS_MANY, 'SmsRecive', 'SMSReciveProvider'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'SMSProviderID' => 'Smsprovider',
			'SMSProviderName' => 'Smsprovider Name',
			'SMSProviderNumber' => 'Smsprovider Number',
			'SMSProviderStatus' => 'Smsprovider Status',
			'SMSPassword' => 'Smspassword',
			'SMSUserName' => 'Smsuser Name',
			'SMSProxyAddress' => 'Smsproxy Address',
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

		$criteria->compare('SMSProviderID',$this->SMSProviderID);
		$criteria->compare('SMSProviderName',$this->SMSProviderName);
		$criteria->compare('SMSProviderNumber',$this->SMSProviderNumber);
		$criteria->compare('SMSProviderStatus',$this->SMSProviderStatus);
		$criteria->compare('SMSPassword',$this->SMSPassword,true);
		$criteria->compare('SMSUserName',$this->SMSUserName,true);
		$criteria->compare('SMSProxyAddress',$this->SMSProxyAddress,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SmsProvider the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
