<?php

/**
 * This is the model class for table "{{message}}".
 *
 * The followings are the available columns in table '{{message}}':
 * @property integer $MessageID
 * @property integer $MessageUserID
 * @property integer $MessageParentID
 * @property string $MessageText
 * @property string $MessageAddDate
 * @property integer $MessageStatus
 */
class Message extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{message}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('MessageUserID, MessageParentID, MessageText, MessageAddDate, MessageStatus', 'required'),
			array('MessageUserID, MessageParentID, MessageStatus', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('MessageID, MessageUserID, MessageParentID, MessageText, MessageAddDate, MessageStatus', 'safe', 'on'=>'search'),
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
			'MessageID' => 'Message',
			'MessageUserID' => 'Message User',
			'MessageParentID' => 'Message Parent',
			'MessageText' => 'Message Text',
			'MessageAddDate' => 'Message Add Date',
			'MessageStatus' => 'Message Status',
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

		$criteria->compare('MessageID',$this->MessageID);
		$criteria->compare('MessageUserID',$this->MessageUserID);
		$criteria->compare('MessageParentID',$this->MessageParentID);
		$criteria->compare('MessageText',$this->MessageText,true);
		$criteria->compare('MessageAddDate',$this->MessageAddDate,true);
		$criteria->compare('MessageStatus',$this->MessageStatus);

        if(Yii::app()->user->id==1){

        }else{
            $criteria->compare('MessageUserID',Yii::app()->user->id);
        }

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Message the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
