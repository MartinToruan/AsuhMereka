<?php

/**
 * This is the model class for table "data_diri_anak".
 *
 * The followings are the available columns in table 'data_diri_anak':
 * @property integer $id_data_diri_anak
 * @property string $nama_lengkap
 * @property string $foto_profil
 * @property string $jenis_kelamin
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $agama
 * @property string $suku
 * @property string $alamat
 *
 * The followings are the available model relations:
 * @property PerantaraAnak[] $perantaraAnaks
 * @property PrestasiAnak[] $prestasiAnaks
 * @property Request[] $requests
 */
class DataDiriAnak extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DataDiriAnak the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'data_diri_anak';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_lengkap, foto_profil, jenis_kelamin, tempat_lahir, tanggal_lahir, agama, suku, alamat', 'required'),
			array('nama_lengkap', 'length', 'max'=>75),
			array('foto_profil', 'file', 'types'=>'jpg, gif, png', 'safe'=>false),
			array('jenis_kelamin', 'length', 'max'=>9),
			array('tempat_lahir, suku', 'length', 'max'=>35),
			array('agama', 'length', 'max'=>8),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_data_diri_anak, nama_lengkap, foto_profil, jenis_kelamin, tempat_lahir, tanggal_lahir, agama, suku, alamat', 'safe', 'on'=>'search'),
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
			'perantaraAnaks' => array(self::HAS_MANY, 'PerantaraAnak', 'id_anak'),
			'prestasiAnaks' => array(self::HAS_MANY, 'PrestasiAnak', 'id_anak'),
			'requests' => array(self::HAS_MANY, 'Request', 'id_anak'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_data_diri_anak' => 'Id Data Diri Anak',
			'nama_lengkap' => 'Nama Lengkap',
			'foto_profil' => 'Foto Profil',
			'jenis_kelamin' => 'Jenis Kelamin',
			'tempat_lahir' => 'Tempat Lahir',
			'tanggal_lahir' => 'Tanggal Lahir',
			'agama' => 'Agama',
			'suku' => 'Suku',
			'alamat' => 'Alamat',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_data_diri_anak',$this->id_data_diri_anak);
		$criteria->compare('nama_lengkap',$this->nama_lengkap,true);
		$criteria->compare('foto_profil',$this->foto_profil,true);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);
		$criteria->compare('tempat_lahir',$this->tempat_lahir,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('agama',$this->agama,true);
		$criteria->compare('suku',$this->suku,true);
		$criteria->compare('alamat',$this->alamat,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}