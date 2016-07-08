<?php

/**
 * This is the model class for table "{{comment}}".
 *
 * The followings are the available columns in table '{{comment}}':
 * @property integer $CommentID
 * @property integer $CommentParentID
 * @property string $CommentDescription
 * @property string $CommentAddDate
 * @property string $CommentName
 * @property string $CommentEmail
 * @property integer $CommentStatus
 */
class Comment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{comment}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CommentParentID, CommentDescription, CommentAddDate, CommentName, CommentEmail, CommentStatus', 'required'),
			array('CommentID, CommentParentID, CommentStatus', 'numerical', 'integerOnly'=>true),
			array('CommentName', 'length', 'max'=>50),
			array('CommentEmail', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CommentID, CommentParentID, CommentDescription, CommentAddDate, CommentName, CommentEmail, CommentStatus', 'safe', 'on'=>'search'),
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
			'CommentID' => 'Comment',
			'CommentParentID' => 'Comment Parent',
			'CommentDescription' => 'Comment Description',
			'CommentAddDate' => 'Comment Add Date',
			'CommentName' => 'Comment Name',
			'CommentEmail' => 'Comment Email',
			'CommentStatus' => 'Comment Status',
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

		$criteria->compare('CommentID',$this->CommentID);
		$criteria->compare('CommentParentID',$this->CommentParentID);
		$criteria->compare('CommentDescription',$this->CommentDescription,true);
		$criteria->compare('CommentAddDate',$this->CommentAddDate,true);
		$criteria->compare('CommentName',$this->CommentName,true);
		$criteria->compare('CommentEmail',$this->CommentEmail,true);
		$criteria->compare('CommentStatus',$this->CommentStatus);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Comment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
