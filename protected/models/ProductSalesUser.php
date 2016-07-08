<?php

/**
 * This is the model class for table "{{product_sales_user}}".
 *
 * The followings are the available columns in table '{{product_sales_user}}':
 * @property integer $ProductSalesID
 * @property integer $UserID
 * @property integer $ProductSalesUserPrice
 * @property string $ProductSalesUserAddDate
 * @property integer $productSalesUser
 */
class ProductSalesUser extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{product_sales_user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ProductSalesID, UserID, ProductSalesUserPrice, ProductSalesUserAddDate', 'required'),
			array('ProductSalesID, UserID, ProductSalesUserPrice', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ProductSalesID, UserID, ProductSalesUserPrice, ProductSalesUserAddDate, productSalesUser', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ProductSalesID' => 'Product Sales',
			'UserID' => 'User',
			'ProductSalesUserPrice' => 'Product Sales User Price',
			'ProductSalesUserAddDate' => 'Product Sales User Add Date',
			'productSalesUser' => 'Product Sales User',
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

		$criteria->compare('ProductSalesID',$this->ProductSalesID);
		$criteria->compare('UserID',$this->UserID);
		$criteria->compare('ProductSalesUserPrice',$this->ProductSalesUserPrice);
		$criteria->compare('ProductSalesUserAddDate',$this->ProductSalesUserAddDate,true);
		$criteria->compare('productSalesUser',$this->productSalesUser);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProductSalesUser the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
