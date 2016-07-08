<?php

/**
 * This is the model class for table "{{deals}}".
 *
 * The followings are the available columns in table '{{deals}}':
 * @property integer $DealsID
 * @property string $DealsTitle
 * @property string $DealsDiscription
 * @property string $DealsLink
 * @property string $DealsAddDate
 * @property integer $DealsStatus
 * @property integer $DealsPrice
 * @property integer $DealsPercent
 */
class Deals extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{deals}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array(' DealsPrice, DealsPercent', 'required'),
			array('DealsID, DealsStatus, DealsPrice, DealsPercent', 'numerical', 'integerOnly'=>true),
			array('DealsTitle', 'length', 'max'=>255),
			array('DealsDiscription, DealsLink, DealsAddDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('DealsID, DealsTitle, DealsDiscription, DealsLink, DealsAddDate, DealsStatus, DealsPrice, DealsPercent', 'safe', 'on'=>'search'),
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
			'DealsID' => 'Deals',
			'DealsTitle' => 'عنوان',
			'DealsDiscription' => 'توضیحات',
			'DealsLink' => 'لینک',
			'DealsAddDate' => 'تاریخ ایجاد',
			'DealsStatus' => 'وضعیت',
			'DealsPrice' => 'قیمت',
			'DealsPercent' => 'درصد',
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

		$criteria->compare('DealsID',$this->DealsID);
		$criteria->compare('DealsTitle',$this->DealsTitle,true);
		$criteria->compare('DealsDiscription',$this->DealsDiscription,true);
		$criteria->compare('DealsLink',$this->DealsLink,true);
		$criteria->compare('DealsAddDate',$this->DealsAddDate,true);
		$criteria->compare('DealsStatus',$this->DealsStatus);
		$criteria->compare('DealsPrice',$this->DealsPrice);
		$criteria->compare('DealsPercent',$this->DealsPercent);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Deals the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
