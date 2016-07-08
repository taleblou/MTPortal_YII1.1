<?php

/**
 * This is the model class for table "{{price}}".
 *
 * The followings are the available columns in table '{{price}}':
 * @property integer $PriceID
 * @property string $PriceUpDate
 * @property string $PriceTitle
 * @property integer $PriceOrderBy
 * @property integer $Price
 * @property integer $PriceGroupID
 */
class Price extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{price}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PriceGroupID', 'required'),
			array('PriceOrderBy, Price, PriceGroupID', 'numerical', 'integerOnly'=>true),
			array('PriceUpDate', 'length', 'max'=>45),
			array('PriceTitle', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PriceID, PriceUpDate, PriceTitle, PriceOrderBy, Price, PriceGroupID', 'safe', 'on'=>'search'),
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
			'PriceID' => 'Price',
			'PriceUpDate' => 'Price Up Date',
			'PriceTitle' => 'Price Title',
			'PriceOrderBy' => 'Price Order By',
			'Price' => 'Price',
			'PriceGroupID' => 'Price Group',
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

		$criteria->compare('PriceID',$this->PriceID);
		$criteria->compare('PriceUpDate',$this->PriceUpDate,true);
		$criteria->compare('PriceTitle',$this->PriceTitle,true);
		$criteria->compare('PriceOrderBy',$this->PriceOrderBy);
		$criteria->compare('Price',$this->Price);
		$criteria->compare('PriceGroupID',$this->PriceGroupID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Price the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
