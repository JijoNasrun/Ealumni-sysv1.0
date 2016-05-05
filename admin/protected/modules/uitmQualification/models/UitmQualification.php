<?php

/**
 * This is the model class for table "uitm_qualification".
 *
 * The followings are the available columns in table 'uitm_qualification':
 * @property integer $qualification_id
 * @property string $no_kp
 * @property string $level
 * @property string $mode
 * @property string $ProgramID
 * @property string $yearGraduate
 */
class UitmQualification extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'uitm_qualification';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('no_kp, level, mode, ProgramID, yearGraduate', 'required'),
			array('no_kp', 'length', 'max'=>15),
			array('level', 'length', 'max'=>10),
			array('mode', 'length', 'max'=>20),
			array('ProgramID', 'length', 'max'=>5),
			array('yearGraduate', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('qualification_id, no_kp, level, mode, ProgramID, yearGraduate', 'safe', 'on'=>'search'),
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
			'qualification_id' => 'Qualification',
			'no_kp' => 'No Kp',
			'level' => 'Level',
			'mode' => 'Mode',
			'ProgramID' => 'Program',
			'yearGraduate' => 'Year Graduate',
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

		$criteria->compare('qualification_id',$this->qualification_id);
		$criteria->compare('no_kp',$this->no_kp,true);
		$criteria->compare('level',$this->level,true);
		$criteria->compare('mode',$this->mode,true);
		$criteria->compare('ProgramID',$this->ProgramID,true);
		$criteria->compare('yearGraduate',$this->yearGraduate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UitmQualification the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
