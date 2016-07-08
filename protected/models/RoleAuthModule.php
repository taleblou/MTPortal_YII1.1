<?php

/**
 * This is the model class for table "{{role_auth_module}}".
 *
 * The followings are the available columns in table '{{role_auth_module}}':
 * @property integer $RoleID
 * @property integer $AuthID
 * @property integer $ModuleID
 *
 * The followings are the available model relations:
 * @property Auth $auth
 * @property Module $module
 * @property Role $role
 */
class RoleAuthModule extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RoleAuthModule the static model class
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
		return '{{role_auth_module}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RoleID, AuthID, ModuleID', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('RoleID, AuthID, ModuleID', 'safe', 'on'=>'search'),
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
			'auth' => array(self::BELONGS_TO, 'Auth', 'AuthID'),
			'module' => array(self::BELONGS_TO, 'Module', 'ModuleID'),
			'role' => array(self::BELONGS_TO, 'Role', 'RoleID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RoleID' => 'Role',
			'AuthID' => 'Auth',
			'ModuleID' => 'Module',
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

		$criteria->compare('RoleID',$this->RoleID);
		$criteria->compare('AuthID',$this->AuthID);
		$criteria->compare('ModuleID',$this->ModuleID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}