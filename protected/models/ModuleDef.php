<?php

/**
 * This is the model class for table "{{moduledef}}".
 *
 * The followings are the available columns in table '{{moduledef}}':
 * @property integer $ModuleDefID
 * @property string $ModuleName
 * @property integer $ModuleEnabled
 * @property double $ModuleVersion
 * @property string $ModulePath
 * @property string $ModuleFamilyName
 * @property integer $ModuleAction
 *
 * The followings are the available model relations:
 * @property Menu[] $menus
 * @property Module[] $modules
 */
class Moduledef extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{moduledef}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ModuleDefID, ModulePath, ModuleFamilyName', 'required'),
			array('ModuleDefID, ModuleEnabled, ModuleAction', 'numerical', 'integerOnly'=>true),
			array('ModuleVersion', 'numerical'),
			array('ModuleName, ModulePath', 'length', 'max'=>255),
			array('ModuleFamilyName', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ModuleDefID, ModuleName, ModuleEnabled, ModuleVersion, ModulePath, ModuleFamilyName, ModuleAction', 'safe', 'on'=>'search'),
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
			'menus' => array(self::HAS_MANY, 'Menu', 'MenuAction'),
			'modules' => array(self::HAS_MANY, 'Module', 'ModuleDefID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ModuleDefID' => 'Module Def',
			'ModuleName' => 'Module Name',
			'ModuleEnabled' => 'Module Enabled',
			'ModuleVersion' => 'Module Version',
			'ModulePath' => 'Module Path',
			'ModuleFamilyName' => 'Module Family Name',
			'ModuleAction' => 'Module Action',
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

		$criteria->compare('ModuleDefID',$this->ModuleDefID);
		$criteria->compare('ModuleName',$this->ModuleName,true);
		$criteria->compare('ModuleEnabled',$this->ModuleEnabled);
		$criteria->compare('ModuleVersion',$this->ModuleVersion);
		$criteria->compare('ModulePath',$this->ModulePath,true);
		$criteria->compare('ModuleFamilyName',$this->ModuleFamilyName,true);
		$criteria->compare('ModuleAction',$this->ModuleAction);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Moduledef the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
