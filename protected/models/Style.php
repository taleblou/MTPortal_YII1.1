<?php

/**
 * This is the model class for table "{{style}}".
 *
 * The followings are the available columns in table '{{style}}':
 * @property integer $StyleID
 * @property string $StyleName
 * @property string $StyleSetting
 * @property integer $StyleParentID
 * @property integer StyleStatus
 *
 * The followings are the available model relations:
 * @property Page[] $pages
 * @property Portal[] $portals
 */
class Style extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Style the static model class
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
		return '{{style}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('StyleName', 'required'),
			array('StyleParentID,StyleStatus', 'numerical', 'integerOnly'=>true),
			array('StyleName', 'length', 'max'=>45),
			array('StyleSetting', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('StyleID, StyleName, StyleSetting, StyleParentID,StyleStatus', 'safe', 'on'=>'search'),
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
			'pages' => array(self::HAS_MANY, 'Page', 'PageStyleID'),
			'portals' => array(self::HAS_MANY, 'Portal', 'PortalStyleID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'StyleID' => 'Style',
			'StyleName' => 'Style Name',
			'StyleSetting' => 'Style Setting',
			'StyleParentID' => 'Style Parent',
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

		$criteria->compare('StyleID',$this->StyleID);
		$criteria->compare('StyleName',$this->StyleName,true);
		$criteria->compare('StyleSetting',$this->StyleSetting,true);
		$criteria->compare('StyleParentID',$this->StyleParentID);
        $criteria->compare('StyleStatus',$this->StyleStatus);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}