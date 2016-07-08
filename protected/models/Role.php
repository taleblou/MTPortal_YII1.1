<?php

/**
 * This is the model class for table "{{role}}".
 *
 * The followings are the available columns in table '{{role}}':
 * @property integer $RoleID
 * @property string $RoleName
 * @property integer $PortalID
 * @property integer $RoleParentID
 *
 * The followings are the available model relations:
 * @property Portal $portal
 * @property Role $roleParent
 * @property Role[] $roles
 * @property RoleAuthModule[] $roleAuthModules
 */
class Role extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Role the static model class
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
		return '{{role}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RoleName, PortalID', 'required'),
			array('PortalID, RoleParentID', 'numerical', 'integerOnly'=>true),
			array('RoleName', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('RoleID, RoleName, PortalID, RoleParentID', 'safe', 'on'=>'search'),
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
			'portal' => array(self::BELONGS_TO, 'Portal', 'PortalID'),
			'roleParent' => array(self::BELONGS_TO, 'Role', 'RoleParentID'),
			'roles' => array(self::HAS_MANY, 'Role', 'RoleParentID'),
			'roleAuthModules' => array(self::HAS_MANY, 'RoleAuthModule', 'RoleID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RoleID' => 'Role',
			'RoleName' => 'Role Name',
			'PortalID' => 'Portal',
			'RoleParentID' => 'Role Parent',
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
		$criteria->compare('RoleName',$this->RoleName,true);
		$criteria->compare('PortalID',$this->PortalID);
		$criteria->compare('RoleParentID',$this->RoleParentID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}