<?php

/**
 * This is the model class for table "{{health}}".
 *
 * The followings are the available columns in table '{{health}}':
 * @property integer $HealthID
 * @property string $HealthTitle
 * @property string $HealthContent
 * @property string $HealthSource
 * @property string $HealthAddDate
 * @property integer $HealthStatus
 */
class Health extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{health}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('HealthStatus', 'required'),
			array('HealthStatus', 'numerical', 'integerOnly'=>true),
			array('HealthTitle, HealthSource', 'length', 'max'=>255),
			array('HealthContent, HealthAddDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('HealthID, HealthTitle, HealthContent, HealthSource, HealthAddDate, HealthStatus', 'safe', 'on'=>'search'),
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
			'HealthID' => 'Health',
			'HealthTitle' => 'Health Title',
			'HealthContent' => 'Health Content',
			'HealthSource' => 'Health Source',
			'HealthAddDate' => 'Health Add Date',
			'HealthStatus' => 'Health Status',
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

		$criteria->compare('HealthID',$this->HealthID);
		$criteria->compare('HealthTitle',$this->HealthTitle,true);
		$criteria->compare('HealthContent',$this->HealthContent,true);
		$criteria->compare('HealthSource',$this->HealthSource,true);
		$criteria->compare('HealthAddDate',$this->HealthAddDate,true);
		$criteria->compare('HealthStatus',$this->HealthStatus);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Health the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
