<?php

/**
 * This is the model class for table "{{content}}".
 *
 * The followings are the available columns in table '{{content}}':
 * @property integer $ContentID
 * @property string $ContentTitle
 * @property string $ContentBody
 * @property string $ContentStartDate
 * @property string $ContentEndDate
 * @property string $ContentAddDate
 * @property integer $ContentModuleID
 * @property integer $ContentStatus
 * @property integer $ContentAddBy
 * @property string $ContentUpdate
 *
 * The followings are the available model relations:
 * @property Module $contentModule
 */
class Content extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{content}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ContentTitle, ContentAddDate, ContentModuleID, ContentAddBy, ContentUpdate', 'required'),
			array('ContentModuleID, ContentStatus, ContentAddBy', 'numerical', 'integerOnly'=>true),
			array('ContentTitle', 'length', 'max'=>255),
			array('ContentBody, ContentStartDate, ContentEndDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ContentID, ContentTitle, ContentBody, ContentStartDate, ContentEndDate, ContentAddDate, ContentModuleID, ContentStatus, ContentAddBy, ContentUpdate', 'safe', 'on'=>'search'),
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
			'contentModule' => array(self::BELONGS_TO, 'Module', 'ContentModuleID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ContentID' => 'Content',
			'ContentTitle' => 'Content Title',
			'ContentBody' => 'Content Body',
			'ContentStartDate' => 'Content Start Date',
			'ContentEndDate' => 'Content End Date',
			'ContentAddDate' => 'Content Add Date',
			'ContentModuleID' => 'Content Module',
			'ContentStatus' => 'Content Status',
			'ContentAddBy' => 'Content Add By',
			'ContentUpdate' => 'Content Update',
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

		$criteria->compare('ContentID',$this->ContentID);
		$criteria->compare('ContentTitle',$this->ContentTitle,true);
		$criteria->compare('ContentBody',$this->ContentBody,true);
		$criteria->compare('ContentStartDate',$this->ContentStartDate,true);
		$criteria->compare('ContentEndDate',$this->ContentEndDate,true);
		$criteria->compare('ContentAddDate',$this->ContentAddDate,true);
		$criteria->compare('ContentModuleID',$this->ContentModuleID);
		$criteria->compare('ContentStatus',$this->ContentStatus);
		$criteria->compare('ContentAddBy',$this->ContentAddBy);
		$criteria->compare('ContentUpdate',$this->ContentUpdate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Content the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
