<?php

/**
 * This is the model class for table "pending".
 *
 * The followings are the available columns in table 'pending':
 * @property integer $pending_id
 * @property string $pending_name
 * @property string $pending_IC
 * @property string $pending_email
 * @property string $pending_program
 * @property string $pending_yearG
 */
class Pending extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pending';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pending_name, pending_email, pending_program, pending_yearG', 'length', 'max'=>45),
			array('pending_IC', 'length', 'max'=>12),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pending_id, pending_name, pending_IC, pending_email, pending_program, pending_yearG', 'safe', 'on'=>'search'),
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
			'pending_id' => 'Pending',
			'pending_name' => 'Pending Name',
			'pending_IC' => 'Pending Ic',
			'pending_email' => 'Pending Email',
			'pending_program' => 'Pending Program',
			'pending_yearG' => 'Pending Year G',
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

		$criteria->compare('pending_id',$this->pending_id);
		$criteria->compare('pending_name',$this->pending_name,true);
		$criteria->compare('pending_IC',$this->pending_IC,true);
		$criteria->compare('pending_email',$this->pending_email,true);
		$criteria->compare('pending_program',$this->pending_program,true);
		$criteria->compare('pending_yearG',$this->pending_yearG,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pending the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
