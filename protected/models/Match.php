<?php

/**
 * This is the model class for table "{{match}}".
 *
 * The followings are the available columns in table '{{match}}':
 * @property integer $MatchID
 * @property string $MachTitle
 * @property string $MatchQuastion
 * @property string $MachOptions1
 * @property string $MachOptions2
 * @property string $MachOptions3
 * @property string $MachOptions4
 * @property integer $MatchStatus
 * @property string $MatchAddDate
 * @property integer $MatchTrueOptions
 */
class Match extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{match}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('MatchStatus, MatchTrueOptions', 'numerical', 'integerOnly'=>true),
			array('MachTitle, MatchQuastion, MachOptions1, MachOptions2, MachOptions3, MachOptions4', 'length', 'max'=>255),
			array('MatchAddDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('MatchID, MachTitle, MatchQuastion, MachOptions1, MachOptions2, MachOptions3, MachOptions4, MatchStatus, MatchAddDate, MatchTrueOptions', 'safe', 'on'=>'search'),
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
			'MatchID' => 'Match',
			'MachTitle' => 'Mach Title',
			'MatchQuastion' => 'Match Quastion',
			'MachOptions1' => 'Mach Options1',
			'MachOptions2' => 'Mach Options2',
			'MachOptions3' => 'Mach Options3',
			'MachOptions4' => 'Mach Options4',
			'MatchStatus' => 'Match Status',
			'MatchAddDate' => 'Match Add Date',
			'MatchTrueOptions' => 'Match True Options',
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

		$criteria->compare('MatchID',$this->MatchID);
		$criteria->compare('MachTitle',$this->MachTitle,true);
		$criteria->compare('MatchQuastion',$this->MatchQuastion,true);
		$criteria->compare('MachOptions1',$this->MachOptions1,true);
		$criteria->compare('MachOptions2',$this->MachOptions2,true);
		$criteria->compare('MachOptions3',$this->MachOptions3,true);
		$criteria->compare('MachOptions4',$this->MachOptions4,true);
		$criteria->compare('MatchStatus',$this->MatchStatus);
		$criteria->compare('MatchAddDate',$this->MatchAddDate,true);
		$criteria->compare('MatchTrueOptions',$this->MatchTrueOptions);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Match the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
