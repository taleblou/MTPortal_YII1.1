<?php

/**
 * This is the model class for table "{{jobs}}".
 *
 * The followings are the available columns in table '{{jobs}}':
 * @property integer $JobsID
 * @property string $JobsTitle
 * @property string $JobsDiscription
 * @property string $JobsTell
 * @property string $JobsFax
 * @property string $JobsMobile
 * @property string $JobsSite
 * @property string $JobsAddress
 * @property string $JobsLat
 * @property string $JobsLong
 * @property string $JobsEmail
 * @property string $JobsAddDate
 * @property integer $JobsCategory
 * @property integer $JobsStatus
 * @property integer $JobRate
 *
 * The followings are the available model relations:
 * @property JobsCategory $jobsCategory
 */
class Jobs extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{jobs}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('JobsStatus', 'required'),
			array('JobsCategory, JobsStatus, JobRate', 'numerical', 'integerOnly'=>true),
			array('JobsTitle, JobsEmail', 'length', 'max'=>255),
			array('JobsTell', 'length', 'max'=>85),
			array('JobsFax, JobsMobile', 'length', 'max'=>55),
			array('JobsSite', 'length', 'max'=>105),
			array('JobsLat, JobsLong', 'length', 'max'=>45),
			array('JobsDiscription, JobsAddress, JobsAddDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('JobsID, JobsTitle, JobsDiscription, JobsTell, JobsFax, JobsMobile, JobsSite, JobsAddress, JobsLat, JobsLong, JobsEmail, JobsAddDate, JobsCategory, JobsStatus, JobRate', 'safe', 'on'=>'search'),
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
			'jobsCategory' => array(self::BELONGS_TO, 'JobsCategory', 'JobsCategory'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'JobsID' => 'Jobs',
			'JobsTitle' => 'Jobs Title',
			'JobsDiscription' => 'Jobs Discription',
			'JobsTell' => 'Jobs Tell',
			'JobsFax' => 'Jobs Fax',
			'JobsMobile' => 'Jobs Mobile',
			'JobsSite' => 'Jobs Site',
			'JobsAddress' => 'Jobs Address',
			'JobsLat' => 'Jobs Lat',
			'JobsLong' => 'Jobs Long',
			'JobsEmail' => 'Jobs Email',
			'JobsAddDate' => 'Jobs Add Date',
			'JobsCategory' => 'Jobs Category',
			'JobsStatus' => 'Jobs Status',
			'JobRate' => 'Job Rate',
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

		$criteria->compare('JobsID',$this->JobsID);
		$criteria->compare('JobsTitle',$this->JobsTitle,true);
		$criteria->compare('JobsDiscription',$this->JobsDiscription,true);
		$criteria->compare('JobsTell',$this->JobsTell,true);
		$criteria->compare('JobsFax',$this->JobsFax,true);
		$criteria->compare('JobsMobile',$this->JobsMobile,true);
		$criteria->compare('JobsSite',$this->JobsSite,true);
		$criteria->compare('JobsAddress',$this->JobsAddress,true);
		$criteria->compare('JobsLat',$this->JobsLat,true);
		$criteria->compare('JobsLong',$this->JobsLong,true);
		$criteria->compare('JobsEmail',$this->JobsEmail,true);
		$criteria->compare('JobsAddDate',$this->JobsAddDate,true);
		$criteria->compare('JobsCategory',$this->JobsCategory);
		$criteria->compare('JobsStatus',$this->JobsStatus);
		$criteria->compare('JobRate',$this->JobRate);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Jobs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
