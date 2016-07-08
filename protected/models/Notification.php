<?php

/**
 * This is the model class for table "{{notification}}".
 *
 * The followings are the available columns in table '{{notification}}':
 * @property integer $NotificationID
 * @property string $NotificationTitle
 * @property string $NotificationSubject
 * @property string $NotificationBody
 */
class Notification extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{notification}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NotificationTitle, NotificationSubject, NotificationBody', 'required'),
			array('NotificationTitle, NotificationSubject, NotificationBody', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('NotificationID, NotificationTitle, NotificationSubject, NotificationBody', 'safe', 'on'=>'search'),
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
			'NotificationID' => 'Notification',
			'NotificationTitle' => 'Notification Title',
			'NotificationSubject' => 'Notification Subject',
			'NotificationBody' => 'Notification Body',
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

		$criteria->compare('NotificationID',$this->NotificationID);
		$criteria->compare('NotificationTitle',$this->NotificationTitle,true);
		$criteria->compare('NotificationSubject',$this->NotificationSubject,true);
		$criteria->compare('NotificationBody',$this->NotificationBody,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Notification the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
