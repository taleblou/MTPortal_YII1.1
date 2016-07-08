<?php

/**
 * This is the model class for table "{{sms_dehkhoda}}".
 *
 * The followings are the available columns in table '{{sms_dehkhoda}}':
 * @property string $SMSDehkhodaName
 * @property string $SMSDehkhodaDiscription
 * @property integer $SMSDehkhodaID
 */
class SmsDehkhoda extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sms_dehkhoda}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SMSDehkhodaName', 'length', 'max'=>255),
			array('SMSDehkhodaDiscription', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('SMSDehkhodaName, SMSDehkhodaDiscription, SMSDehkhodaID', 'safe', 'on'=>'search'),
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
			'SMSDehkhodaName' => 'Smsdehkhoda Name',
			'SMSDehkhodaDiscription' => 'Smsdehkhoda Discription',
			'SMSDehkhodaID' => 'Smsdehkhoda',
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

		$criteria->compare('SMSDehkhodaName',$this->SMSDehkhodaName,true);
		$criteria->compare('SMSDehkhodaDiscription',$this->SMSDehkhodaDiscription,true);
		$criteria->compare('SMSDehkhodaID',$this->SMSDehkhodaID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SmsDehkhoda the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
