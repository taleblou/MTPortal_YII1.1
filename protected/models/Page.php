<?php

/**
 * This is the model class for table "{{page}}".
 *
 * The followings are the available columns in table '{{page}}':
 * @property integer $PageID
 * @property string $PageName
 * @property integer $PageOrder
 * @property integer $PageParentID
 * @property string $PageUrl
 * @property integer $PagePortalID
 * @property integer $PageLanguageID
 * @property string $PageKeywords
 * @property string $PageTitle
 * @property integer $PageStyleID
 * @property integer $PageTypeLink
 * @property integer $HomePage
 * @property string $PageDiscription
 * @property string $PageLayouts
 * @property integer $PageStatus
 *
 * The followings are the available model relations:
 * @property Menu[] $menus
 * @property Module[] $modules
 * @property Page $pageParent
 * @property Page[] $pages
 * @property Language $pageLanguage
 * @property Portal $pagePortal
 * @property Style $pageStyle
 */
class Page extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{page}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PageName, PageOrder, PageLanguageID, PageDiscription, PageLayouts', 'required'),
			array('PageOrder, PageParentID, PagePortalID, PageLanguageID, PageStyleID, PageTypeLink, HomePage, PageStatus', 'numerical', 'integerOnly'=>true),
			array('PageName', 'length', 'max'=>255),
			array('PageKeywords, PageTitle', 'length', 'max'=>45),
			array('PageLayouts', 'length', 'max'=>250),
			array('PageUrl', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PageID, PageName, PageOrder, PageParentID, PageUrl, PagePortalID, PageLanguageID, PageKeywords, PageTitle, PageStyleID, PageTypeLink, HomePage, PageDiscription, PageLayouts, PageStatus', 'safe', 'on'=>'search'),
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
			'menus' => array(self::HAS_MANY, 'Menu', 'MenuPageID'),
			'modules' => array(self::HAS_MANY, 'Module', 'ModulePageID'),
			'pageParent' => array(self::BELONGS_TO, 'Page', 'PageParentID'),
			'pages' => array(self::HAS_MANY, 'Page', 'PageParentID'),
			'pageLanguage' => array(self::BELONGS_TO, 'Language', 'PageLanguageID'),
			'pagePortal' => array(self::BELONGS_TO, 'Portal', 'PagePortalID'),
			'pageStyle' => array(self::BELONGS_TO, 'Style', 'PageStyleID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PageID' => 'Page',
			'PageName' => 'Page Name',
			'PageOrder' => 'Page Order',
			'PageParentID' => 'Page Parent',
			'PageUrl' => 'Page Url',
			'PagePortalID' => 'Page Portal',
			'PageLanguageID' => 'Page Language',
			'PageKeywords' => 'Page Keywords',
			'PageTitle' => 'Page Title',
			'PageStyleID' => 'Page Style',
			'PageTypeLink' => 'Page Type Link',
			'HomePage' => 'Home Page',
			'PageDiscription' => 'Page Discription',
			'PageLayouts' => 'Page Layouts',
			'PageStatus' => 'Page Status',
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

		$criteria->compare('PageID',$this->PageID);
		$criteria->compare('PageName',$this->PageName,true);
		$criteria->compare('PageOrder',$this->PageOrder);
		$criteria->compare('PageParentID',$this->PageParentID);
		$criteria->compare('PageUrl',$this->PageUrl,true);
		$criteria->compare('PagePortalID',$this->PagePortalID);
		$criteria->compare('PageLanguageID',$this->PageLanguageID);
		$criteria->compare('PageKeywords',$this->PageKeywords,true);
		$criteria->compare('PageTitle',$this->PageTitle,true);
		$criteria->compare('PageStyleID',$this->PageStyleID);
		$criteria->compare('PageTypeLink',$this->PageTypeLink);
		$criteria->compare('HomePage',$this->HomePage);
		$criteria->compare('PageDiscription',$this->PageDiscription,true);
		$criteria->compare('PageLayouts',$this->PageLayouts,true);
		$criteria->compare('PageStatus',$this->PageStatus);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Page the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
