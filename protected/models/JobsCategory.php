<?php

/**
 * This is the model class for table "{{jobs_category}}".
 *
 * The followings are the available columns in table '{{jobs_category}}':
 * @property integer $JobsCategoryID
 * @property string $JobsCategoryTitle
 * @property string $JobsCategoryDescription
 * @property string $JobsCategoryAddDate
 *
 * The followings are the available model relations:
 * @property Jobs[] $jobs
 */
class JobsCategory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{jobs_category}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('JobsCategoryTitle', 'length', 'max'=>55),
			array('JobsCategoryDescription', 'length', 'max'=>255),
			array('JobsCategoryAddDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('JobsCategoryID, JobsCategoryTitle, JobsCategoryDescription, JobsCategoryAddDate', 'safe', 'on'=>'search'),
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
			'jobs' => array(self::HAS_MANY, 'Jobs', 'JobsCategory'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'JobsCategoryID' => 'Jobs Category',
			'JobsCategoryTitle' => 'Jobs Category Title',
			'JobsCategoryDescription' => 'Jobs Category Description',
			'JobsCategoryAddDate' => 'Jobs Category Add Date',
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

		$criteria->compare('JobsCategoryID',$this->JobsCategoryID);
		$criteria->compare('JobsCategoryTitle',$this->JobsCategoryTitle,true);
		$criteria->compare('JobsCategoryDescription',$this->JobsCategoryDescription,true);
		$criteria->compare('JobsCategoryAddDate',$this->JobsCategoryAddDate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return JobsCategory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
