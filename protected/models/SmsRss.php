<?php

/**
 * This is the model class for table "{{sms_rss}}".
 *
 * The followings are the available columns in table '{{sms_rss}}':
 * @property integer $SMSRssID
 * @property string $SMSRssUrl
 * @property string $SMSRssName
 * @property string $SMSRssParameter
 * @property integer $SMSRssModuleID
 *
 * The followings are the available model relations:
 * @property SmsModule $sMSRssModule
 */
class SmsRss extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sms_rss}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SMSRssModuleID', 'numerical', 'integerOnly'=>true),
			array('SMSRssUrl', 'length', 'max'=>255),
			array('SMSRssName', 'length', 'max'=>105),
			array('SMSRssParameter', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('SMSRssID, SMSRssUrl, SMSRssName, SMSRssParameter, SMSRssModuleID', 'safe', 'on'=>'search'),
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
			'sMSRssModule' => array(self::BELONGS_TO, 'SmsModule', 'SMSRssModuleID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'SMSRssID' => 'Smsrss',
			'SMSRssUrl' => 'Smsrss Url',
			'SMSRssName' => 'Smsrss Name',
			'SMSRssParameter' => 'Smsrss Parameter',
			'SMSRssModuleID' => 'Smsrss Module',
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

		$criteria->compare('SMSRssID',$this->SMSRssID);
		$criteria->compare('SMSRssUrl',$this->SMSRssUrl,true);
		$criteria->compare('SMSRssName',$this->SMSRssName,true);
		$criteria->compare('SMSRssParameter',$this->SMSRssParameter,true);
		$criteria->compare('SMSRssModuleID',$this->SMSRssModuleID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SmsRss the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
