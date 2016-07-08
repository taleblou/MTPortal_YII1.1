<?php

/**
 * This is the model class for table "{{product_sales}}".
 *
 * The followings are the available columns in table '{{product_sales}}':
 * @property integer $ProductSalesID
 * @property integer $ProductSalesAddBy
 * @property string $ProductSalesAddDate
 * @property integer $ProductSalesProductValueID
 * @property integer $ProductSalesStatus
 * @property string $ProductSalesStart
 * @property string $ProductSalesEnd
 */
class ProductSales extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{product_sales}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ProductSalesAddBy, ProductSalesAddDate, ProductSalesProductValueID, ProductSalesStatus, ProductSalesStart, ProductSalesEnd', 'required'),
			array('ProductSalesAddBy, ProductSalesProductValueID, ProductSalesStatus', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ProductSalesID, ProductSalesAddBy, ProductSalesAddDate, ProductSalesProductValueID, ProductSalesStatus, ProductSalesStart, ProductSalesEnd', 'safe', 'on'=>'search'),
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
			'ProductSalesAddBy' => 'Product Sales Add By',
			'ProductSalesAddDate' => 'Product Sales Add Date',
			'ProductSalesProductValueID' => 'Product Sales Product Value',
			'ProductSalesStatus' => 'Product Sales Status',
			'ProductSalesStart' => 'Product Sales Start',
			'ProductSalesEnd' => 'Product Sales End',
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
		$criteria->compare('ProductSalesAddBy',$this->ProductSalesAddBy);
		$criteria->compare('ProductSalesAddDate',$this->ProductSalesAddDate,true);
		$criteria->compare('ProductSalesProductValueID',$this->ProductSalesProductValueID);
		$criteria->compare('ProductSalesStatus',$this->ProductSalesStatus);
		$criteria->compare('ProductSalesStart',$this->ProductSalesStart,true);
		$criteria->compare('ProductSalesEnd',$this->ProductSalesEnd,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProductSales the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
