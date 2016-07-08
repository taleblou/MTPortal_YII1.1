<?php

/**
 * This is the model class for table "{{hadith}}".
 *
 * The followings are the available columns in table '{{hadith}}':
 * @property integer $HadithID
 * @property string $HadithSaid
 * @property string $HadithArab
 * @property string $HadithFarsi
 * @property string $HadithAddDate
 */
class Hadith extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{hadith}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('HadithSaid', 'length', 'max'=>85),
			array('HadithArab, HadithFarsi, HadithAddDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('HadithID, HadithSaid, HadithArab, HadithFarsi, HadithAddDate', 'safe', 'on'=>'search'),
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
			'HadithID' => 'Hadith',
			'HadithSaid' => 'Hadith Said',
			'HadithArab' => 'Hadith Arab',
			'HadithFarsi' => 'Hadith Farsi',
			'HadithAddDate' => 'Hadith Add Date',
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

		$criteria->compare('HadithID',$this->HadithID);
		$criteria->compare('HadithSaid',$this->HadithSaid,true);
		$criteria->compare('HadithArab',$this->HadithArab,true);
		$criteria->compare('HadithFarsi',$this->HadithFarsi,true);
		$criteria->compare('HadithAddDate',$this->HadithAddDate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Hadith the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
