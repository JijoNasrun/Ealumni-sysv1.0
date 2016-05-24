<?php

/**
 * This is the model class for table "alumni".
 *
 * The followings are the available columns in table 'alumni':
 * @property integer $no_matrik
 * @property string $nama
 * @property string $gelaran
 * @property string $no_kp
 * @property string $tarikh_lahir
 * @property string $nama_pekerjaan
 * @property string $tahun_mula
 * @property string $jantina
 * @property string $taraf_WARGANEGARA
 * @property string $cgpa
 * @property string $kelas_ijazah
 * @property string $mod_pengajian
 * @property string $peringkat_pengajian
 * @property string $cawangan
 * @property string $Fakulti
 * @property string $Gugusan
 * @property string $kod_program
 * @property string $program
 * @property string $tarikh_masuk
 * @property integer $tahun_graduasi
 * @property string $tarikh_konvo
 * @property string $no_tel
 * @property string $home_office_tel
 * @property string $alamat
 * @property string $bandar_tetap
 * @property string $negeri_tetap
 * @property string $poskod_tetap
 * @property string $negara_tetap
 * @property string $calamat_tetap
 * @property string $cbandar_tetap
 * @property string $cnegeri_tetap
 * @property integer $cposkod_tetap
 * @property string $cnegara_tetap
 * @property string $email_rasmi
 * @property string $staff_id
 * @property string $department
 * @property string $campus
 * @property string $password
 * @property string $empStatus
 * @property string $relate
 * @property integer $salRangeId
 * @property integer $orgID
 */
class Alumni extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alumni';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('home_office_tel, negara_tetap, calamat_tetap, cbandar_tetap, cnegeri_tetap, cposkod_tetap, cnegara_tetap, password, empStatus, relate, salRangeId, orgID', 'required'),
			array('no_matrik, tahun_graduasi, cposkod_tetap, salRangeId, orgID', 'numerical', 'integerOnly'=>true),
			array('nama, mod_pengajian, peringkat_pengajian, cawangan, negeri_tetap', 'length', 'max'=>80),
			array('gelaran, nama_pekerjaan, tahun_mula', 'length', 'max'=>45),
			array('no_kp, tarikh_konvo, poskod_tetap', 'length', 'max'=>15),
			array('jantina, kod_program, password', 'length', 'max'=>10),
			array('taraf_WARGANEGARA', 'length', 'max'=>29),
			array('cgpa', 'length', 'max'=>5),
			array('kelas_ijazah, no_tel, staff_id', 'length', 'max'=>25),
			array('Fakulti', 'length', 'max'=>46),
			array('Gugusan', 'length', 'max'=>3),
			array('program', 'length', 'max'=>150),
			array('tarikh_masuk', 'length', 'max'=>14),
			array('home_office_tel', 'length', 'max'=>30),
			array('alamat', 'length', 'max'=>113),
			array('bandar_tetap, negara_tetap, cnegara_tetap, email_rasmi', 'length', 'max'=>100),
			array('calamat_tetap, cbandar_tetap, cnegeri_tetap', 'length', 'max'=>55),
			array('department, campus', 'length', 'max'=>50),
			array('empStatus', 'length', 'max'=>8),
			array('relate', 'length', 'max'=>11),
			array('tarikh_lahir', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('no_matrik, nama, gelaran, no_kp, tarikh_lahir, nama_pekerjaan, tahun_mula, jantina, taraf_WARGANEGARA, cgpa, kelas_ijazah, mod_pengajian, peringkat_pengajian, cawangan, Fakulti, Gugusan, kod_program, program, tarikh_masuk, tahun_graduasi, tarikh_konvo, no_tel, home_office_tel, alamat, bandar_tetap, negeri_tetap, poskod_tetap, negara_tetap, calamat_tetap, cbandar_tetap, cnegeri_tetap, cposkod_tetap, cnegara_tetap, email_rasmi, staff_id, department, campus, password, empStatus, relate, salRangeId, orgID', 'safe', 'on'=>'search'),
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
			'no_matrik' => 'No Matrik',
			'nama' => 'Nama',
			'gelaran' => 'Gelaran',
			'no_kp' => 'No Kp',
			'tarikh_lahir' => 'Tarikh Lahir',
			'nama_pekerjaan' => 'Nama Pekerjaan',
			'tahun_mula' => 'Tahun Mula',
			'jantina' => 'Jantina',
			'taraf_WARGANEGARA' => 'Taraf Warganegara',
			'cgpa' => 'Cgpa',
			'kelas_ijazah' => 'Kelas Ijazah',
			'mod_pengajian' => 'Mod Pengajian',
			'peringkat_pengajian' => 'Peringkat Pengajian',
			'cawangan' => 'Cawangan',
			'Fakulti' => 'Fakulti',
			'Gugusan' => 'Gugusan',
			'kod_program' => 'Kod Program',
			'program' => 'Program',
			'tarikh_masuk' => 'Tarikh Masuk',
			'tahun_graduasi' => 'Tahun Graduasi',
			'tarikh_konvo' => 'Tarikh Konvo',
			'no_tel' => 'No Tel',
			'home_office_tel' => 'Home Office Tel',
			'alamat' => 'Alamat',
			'bandar_tetap' => 'Bandar Tetap',
			'negeri_tetap' => 'Negeri Tetap',
			'poskod_tetap' => 'Poskod Tetap',
			'negara_tetap' => 'Negara Tetap',
			'calamat_tetap' => 'Calamat Tetap',
			'cbandar_tetap' => 'Cbandar Tetap',
			'cnegeri_tetap' => 'Cnegeri Tetap',
			'cposkod_tetap' => 'Cposkod Tetap',
			'cnegara_tetap' => 'Cnegara Tetap',
			'email_rasmi' => 'Email Rasmi',
			'staff_id' => 'Staff',
			'department' => 'Department',
			'campus' => 'Campus',
			'password' => 'Password',
			'empStatus' => 'Emp Status',
			'relate' => 'Relate',
			'salRangeId' => 'Sal Range',
			'orgID' => 'Org',
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

		$criteria->compare('no_matrik',$this->no_matrik);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('gelaran',$this->gelaran,true);
		$criteria->compare('no_kp',$this->no_kp,true);
		$criteria->compare('tarikh_lahir',$this->tarikh_lahir,true);
		$criteria->compare('nama_pekerjaan',$this->nama_pekerjaan,true);
		$criteria->compare('tahun_mula',$this->tahun_mula,true);
		$criteria->compare('jantina',$this->jantina,true);
		$criteria->compare('taraf_WARGANEGARA',$this->taraf_WARGANEGARA,true);
		$criteria->compare('cgpa',$this->cgpa,true);
		$criteria->compare('kelas_ijazah',$this->kelas_ijazah,true);
		$criteria->compare('mod_pengajian',$this->mod_pengajian,true);
		$criteria->compare('peringkat_pengajian',$this->peringkat_pengajian,true);
		$criteria->compare('cawangan',$this->cawangan,true);
		$criteria->compare('Fakulti',$this->Fakulti,true);
		$criteria->compare('Gugusan',$this->Gugusan,true);
		$criteria->compare('kod_program',$this->kod_program,true);
		$criteria->compare('program',$this->program,true);
		$criteria->compare('tarikh_masuk',$this->tarikh_masuk,true);
		$criteria->compare('tahun_graduasi',$this->tahun_graduasi);
		$criteria->compare('tarikh_konvo',$this->tarikh_konvo,true);
		$criteria->compare('no_tel',$this->no_tel,true);
		$criteria->compare('home_office_tel',$this->home_office_tel,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('bandar_tetap',$this->bandar_tetap,true);
		$criteria->compare('negeri_tetap',$this->negeri_tetap,true);
		$criteria->compare('poskod_tetap',$this->poskod_tetap,true);
		$criteria->compare('negara_tetap',$this->negara_tetap,true);
		$criteria->compare('calamat_tetap',$this->calamat_tetap,true);
		$criteria->compare('cbandar_tetap',$this->cbandar_tetap,true);
		$criteria->compare('cnegeri_tetap',$this->cnegeri_tetap,true);
		$criteria->compare('cposkod_tetap',$this->cposkod_tetap);
		$criteria->compare('cnegara_tetap',$this->cnegara_tetap,true);
		$criteria->compare('email_rasmi',$this->email_rasmi,true);
		$criteria->compare('staff_id',$this->staff_id,true);
		$criteria->compare('department',$this->department,true);
		$criteria->compare('campus',$this->campus,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('empStatus',$this->empStatus,true);
		$criteria->compare('relate',$this->relate,true);
		$criteria->compare('salRangeId',$this->salRangeId);
		$criteria->compare('orgID',$this->orgID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Alumni the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
