<?php

/**
 * This is the model class for table "{{language}}".
 *
 * The followings are the available columns in table '{{language}}':
 * @property integer $LanguageID
 * @property string $LanguageName
 * @property integer $LanguageDirection
 * @property string $LanguageCulture
 * @property integer $LanguageEnabled
 * @property string $LanguageCalendar
 *
 * The followings are the available model relations:
 * @property Page[] $pages
 * @property Portal[] $portals
 */
class Language extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Language the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{language}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('LanguageName, LanguageDirection, LanguageCulture, LanguageEnabled, LanguageCalendar', 'required'),
			array('LanguageDirection, LanguageEnabled', 'numerical', 'integerOnly'=>true),
			array('LanguageName, LanguageCalendar', 'length', 'max'=>50),
			array('LanguageCulture', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('LanguageID, LanguageName, LanguageDirection, LanguageCulture, LanguageEnabled, LanguageCalendar', 'safe', 'on'=>'search'),
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
			'pages' => array(self::HAS_MANY, 'Page', 'PageLanguageID'),
			'portals' => array(self::HAS_MANY, 'Portal', 'PortalDefaultLanguageID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'LanguageID' => 'Language',
			'LanguageName' => 'Language Name',
			'LanguageDirection' => 'Language Direction',
			'LanguageCulture' => 'Language Culture',
			'LanguageEnabled' => 'Language Enabled',
			'LanguageCalendar' => 'Language Calendar',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('LanguageID',$this->LanguageID);
		$criteria->compare('LanguageName',$this->LanguageName,true);
		$criteria->compare('LanguageDirection',$this->LanguageDirection);
		$criteria->compare('LanguageCulture',$this->LanguageCulture,true);
		$criteria->compare('LanguageEnabled',$this->LanguageEnabled);
		$criteria->compare('LanguageCalendar',$this->LanguageCalendar,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}