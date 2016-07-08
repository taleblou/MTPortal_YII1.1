<?php

/**
 * This is the model class for table "{{module}}".
 *
 * The followings are the available columns in table '{{module}}':
 * @property integer $ModuleID
 * @property integer $ModuleDefID
 * @property integer $ModuleOrder
 * @property integer $ModuleShowinAllPage
 * @property string $ModuleTitle
 * @property string $ModuleSkin
 * @property integer $ModulePortalID
 * @property string $ModuleZone
 * @property integer $ModulePageID
 * @property integer $ModuleLanguageID
 * @property integer $ModuleStyleID
 * @property integer $ModuleStatus
 * @property integer $ModuleCopyID
 *
 * The followings are the available model relations:
 * @property Content[] $contents
 * @property Gallery[] $galleries
 * @property Logo[] $logos
 * @property Menu[] $menus
 * @property Moduledef $moduleDef
 * @property Language $moduleLanguage
 * @property Page $modulePage
 * @property Portal $modulePortal
 * @property RoleAuthModule[] $roleAuthModules
 */
class Module extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{module}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ModuleDefID, ModulePortalID, ModuleZone, ModulePageID, ModuleLanguageID, ModuleStyleID, ModuleCopyID', 'required'),
			array('ModuleDefID, ModuleOrder, ModuleShowinAllPage, ModulePortalID, ModulePageID, ModuleLanguageID, ModuleStyleID, ModuleStatus, ModuleCopyID', 'numerical', 'integerOnly'=>true),
			array('ModuleTitle', 'length', 'max'=>255),
			array('ModuleZone', 'length', 'max'=>250),
			array('ModuleSkin', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ModuleID, ModuleDefID, ModuleOrder, ModuleShowinAllPage, ModuleTitle, ModuleSkin, ModulePortalID, ModuleZone, ModulePageID, ModuleLanguageID, ModuleStyleID, ModuleStatus, ModuleCopyID', 'safe', 'on'=>'search'),
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
			'contents' => array(self::HAS_MANY, 'Content', 'ContentModuleID'),
			'galleries' => array(self::HAS_MANY, 'Gallery', 'GalleryModuleID'),
			'logos' => array(self::HAS_MANY, 'Logo', 'LogoModuleID'),
			'menus' => array(self::HAS_MANY, 'Menu', 'MenuModuleID'),
			'moduleDef' => array(self::BELONGS_TO, 'Moduledef', 'ModuleDefID'),
			'moduleLanguage' => array(self::BELONGS_TO, 'Language', 'ModuleLanguageID'),
			'modulePage' => array(self::BELONGS_TO, 'Page', 'ModulePageID'),
			'modulePortal' => array(self::BELONGS_TO, 'Portal', 'ModulePortalID'),
			'roleAuthModules' => array(self::HAS_MANY, 'RoleAuthModule', 'ModuleID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ModuleID' => 'Module',
			'ModuleDefID' => 'Module Def',
			'ModuleOrder' => 'Module Order',
			'ModuleShowinAllPage' => 'Module Showin All Page',
			'ModuleTitle' => 'Module Title',
			'ModuleSkin' => 'Module Skin',
			'ModulePortalID' => 'Module Portal',
			'ModuleZone' => 'Module Zone',
			'ModulePageID' => 'Module Page',
			'ModuleLanguageID' => 'Module Language',
			'ModuleStyleID' => 'Module Style',
			'ModuleStatus' => 'Module Status',
			'ModuleCopyID' => 'Module Copy',
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

		$criteria->compare('ModuleID',$this->ModuleID);
		$criteria->compare('ModuleDefID',$this->ModuleDefID);
		$criteria->compare('ModuleOrder',$this->ModuleOrder);
		$criteria->compare('ModuleShowinAllPage',$this->ModuleShowinAllPage);
		$criteria->compare('ModuleTitle',$this->ModuleTitle,true);
		$criteria->compare('ModuleSkin',$this->ModuleSkin,true);
		$criteria->compare('ModulePortalID',$this->ModulePortalID);
		$criteria->compare('ModuleZone',$this->ModuleZone,true);
		$criteria->compare('ModulePageID',$this->ModulePageID);
		$criteria->compare('ModuleLanguageID',$this->ModuleLanguageID);
		$criteria->compare('ModuleStyleID',$this->ModuleStyleID);
		$criteria->compare('ModuleStatus',$this->ModuleStatus);
		$criteria->compare('ModuleCopyID',$this->ModuleCopyID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Module the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
