<?php

/**
 * This is the model class for table "{{sms_moduledef}}".
 *
 * The followings are the available columns in table '{{sms_moduledef}}':
 * @property integer $SMSModuleDefID
 * @property string $SMSModuleName
 * @property string $SMSModulePath
 * @property double $SMSModuleVersion
 * @property string $SMSModuleParameter
 *
 * The followings are the available model relations:
 * @property SmsModule[] $smsModules
 */
class SmsModuledef extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sms_moduledef}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SMSModuleDefID, SMSModuleParameter', 'required'),
			array('SMSModuleDefID', 'numerical', 'integerOnly'=>true),
			array('SMSModuleVersion', 'numerical'),
			array('SMSModuleName', 'length', 'max'=>100),
			array('SMSModulePath', 'length', 'max'=>255),
			array('SMSModuleParameter', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('SMSModuleDefID, SMSModuleName, SMSModulePath, SMSModuleVersion, SMSModuleParameter', 'safe', 'on'=>'search'),
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
			'smsModules' => array(self::HAS_MANY, 'SmsModule', 'SMSModuleDefID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'SMSModuleDefID' => 'Smsmodule Def',
			'SMSModuleName' => 'Smsmodule Name',
			'SMSModulePath' => 'Smsmodule Path',
			'SMSModuleVersion' => 'Smsmodule Version',
			'SMSModuleParameter' => 'Smsmodule Parameter',
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

		$criteria->compare('SMSModuleDefID',$this->SMSModuleDefID);
		$criteria->compare('SMSModuleName',$this->SMSModuleName,true);
		$criteria->compare('SMSModulePath',$this->SMSModulePath,true);
		$criteria->compare('SMSModuleVersion',$this->SMSModuleVersion);
		$criteria->compare('SMSModuleParameter',$this->SMSModuleParameter,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SmsModuledef the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
