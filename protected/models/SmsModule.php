<?php

/**
 * This is the model class for table "{{sms_module}}".
 *
 * The followings are the available columns in table '{{sms_module}}':
 * @property integer $SMSModuleID
 * @property string $SMSModuleTitle
 * @property integer $SMSModuleStatus
 * @property integer $SMSModuleDefID
 * @property string $SMSParameterRecive
 * @property string $SMSParameterSend
 * @property integer $SMSActionModuleDef
 *
 * The followings are the available model relations:
 * @property SmsContent[] $smsContents
 * @property Moduledef $sMSActionModuleDef
 * @property SmsModuledef $sMSModuleDef
 * @property SmsRss[] $smsRsses
 */
class SmsModule extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sms_module}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SMSModuleDefID, SMSParameterRecive, SMSParameterSend, SMSActionModuleDef', 'required'),
			array('SMSModuleStatus, SMSModuleDefID, SMSActionModuleDef', 'numerical', 'integerOnly'=>true),
			array('SMSModuleTitle', 'length', 'max'=>255),
			array('SMSParameterRecive, SMSParameterSend', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('SMSModuleID, SMSModuleTitle, SMSModuleStatus, SMSModuleDefID, SMSParameterRecive, SMSParameterSend, SMSActionModuleDef', 'safe', 'on'=>'search'),
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
			'smsContents' => array(self::HAS_MANY, 'SmsContent', 'SMSContentModuleID'),
			'sMSActionModuleDef' => array(self::BELONGS_TO, 'Moduledef', 'SMSActionModuleDef'),
			'sMSModuleDef' => array(self::BELONGS_TO, 'SmsModuledef', 'SMSModuleDefID'),
			'smsRsses' => array(self::HAS_MANY, 'SmsRss', 'SMSRssModuleID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'SMSModuleID' => 'Smsmodule',
			'SMSModuleTitle' => 'Smsmodule Title',
			'SMSModuleStatus' => 'Smsmodule Status',
			'SMSModuleDefID' => 'Smsmodule Def',
			'SMSParameterRecive' => 'Smsparameter Recive',
			'SMSParameterSend' => 'Smsparameter Send',
			'SMSActionModuleDef' => 'Smsaction Module Def',
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

		$criteria->compare('SMSModuleID',$this->SMSModuleID);
		$criteria->compare('SMSModuleTitle',$this->SMSModuleTitle,true);
		$criteria->compare('SMSModuleStatus',$this->SMSModuleStatus);
		$criteria->compare('SMSModuleDefID',$this->SMSModuleDefID);
		$criteria->compare('SMSParameterRecive',$this->SMSParameterRecive,true);
		$criteria->compare('SMSParameterSend',$this->SMSParameterSend,true);
		$criteria->compare('SMSActionModuleDef',$this->SMSActionModuleDef);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SmsModule the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
