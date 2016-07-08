<?php

/**
 * This is the model class for table "{{shop}}".
 *
 * The followings are the available columns in table '{{shop}}':
 * @property integer $ShopID
 * @property integer $ShopAddBy
 * @property string $ShopAddDate
 * @property integer $ShopProductValueID
 * @property integer $ShopStatus
 * @property integer $ShopTax
 * @property integer $ShopDeals
 * @property integer $ShopPrice
 *
 * The followings are the available model relations:
 * @property ProductValue $shopProductValue
 */
class Shop extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{shop}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ShopAddBy, ShopAddDate, ShopProductValueID, ShopStatus, ShopTax, ShopDeals, ShopPrice', 'required'),
			array('ShopAddBy, ShopProductValueID, ShopStatus, ShopTax, ShopDeals, ShopPrice', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ShopID, ShopAddBy, ShopAddDate, ShopProductValueID, ShopStatus, ShopTax, ShopDeals, ShopPrice', 'safe', 'on'=>'search'),
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
			'shopProductValue' => array(self::BELONGS_TO, 'ProductValue', 'ShopProductValueID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ShopID' => 'Shop',
			'ShopAddBy' => 'Shop Add By',
			'ShopAddDate' => 'Shop Add Date',
			'ShopProductValueID' => 'Shop Product Value',
			'ShopStatus' => 'Shop Status',
			'ShopTax' => 'Shop Tax',
			'ShopDeals' => 'Shop Deals',
			'ShopPrice' => 'Shop Price',
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

		$criteria->compare('ShopID',$this->ShopID);
		$criteria->compare('ShopAddBy',$this->ShopAddBy);
		$criteria->compare('ShopAddDate',$this->ShopAddDate,true);
		$criteria->compare('ShopProductValueID',$this->ShopProductValueID);
		$criteria->compare('ShopStatus',$this->ShopStatus);
		$criteria->compare('ShopTax',$this->ShopTax);
		$criteria->compare('ShopDeals',$this->ShopDeals);
		$criteria->compare('ShopPrice',$this->ShopPrice);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Shop the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
