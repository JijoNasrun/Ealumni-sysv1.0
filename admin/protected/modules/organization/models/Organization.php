<?php

/**
 * This is the model class for table "organization".
 *
 * The followings are the available columns in table 'organization':
 * @property integer $OrgID
 * @property string $OrganizationName
 * @property integer $type_id
 * @property integer $IndCategoryID
 * @property string $Address1
 * @property string $Address2
 * @property string $City
 * @property string $State
 * @property string $Country
 * @property integer $Postcode
 * @property integer $Telephone
 * @property integer $Fax
 * @property string $Email
 * @property string $Website
 */
class Organization extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'organization';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('OrganizationName, type_id, IndCategoryID, Address1, Address2, City, State, Country, Postcode, Telephone, Fax, Email, Website', 'required'),
			array('type_id, IndCategoryID, Postcode, Telephone, Fax', 'numerical', 'integerOnly'=>true),
			array('OrganizationName, Address1, Address2, Country, Website', 'length', 'max'=>100),
			array('City, State, Email', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('OrgID, OrganizationName, type_id, IndCategoryID, Address1, Address2, City, State, Country, Postcode, Telephone, Fax, Email, Website', 'safe', 'on'=>'search'),
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
			'OrgID' => 'Org',
			'OrganizationName' => 'Organization Name',
			'type_id' => 'Type',
			'IndCategoryID' => 'Ind Category',
			'Address1' => 'Address1',
			'Address2' => 'Address2',
			'City' => 'City',
			'State' => 'State',
			'Country' => 'Country',
			'Postcode' => 'Postcode',
			'Telephone' => 'Telephone',
			'Fax' => 'Fax',
			'Email' => 'Email',
			'Website' => 'Website',
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

		$criteria->compare('OrgID',$this->OrgID);
		$criteria->compare('OrganizationName',$this->OrganizationName,true);
		$criteria->compare('type_id',$this->type_id);
		$criteria->compare('IndCategoryID',$this->IndCategoryID);
		$criteria->compare('Address1',$this->Address1,true);
		$criteria->compare('Address2',$this->Address2,true);
		$criteria->compare('City',$this->City,true);
		$criteria->compare('State',$this->State,true);
		$criteria->compare('Country',$this->Country,true);
		$criteria->compare('Postcode',$this->Postcode);
		$criteria->compare('Telephone',$this->Telephone);
		$criteria->compare('Fax',$this->Fax);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('Website',$this->Website,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Organization the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
