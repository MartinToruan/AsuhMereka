<?php

/**
 * This is the model class for table "data_diri_perantara".
 *
 * The followings are the available columns in table 'data_diri_perantara':
 * @property integer $id_data_diri_perantara
 * @property string $nama_perantara
 * @property string $foto_profil
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $suku
 * @property string $alamat
 *
 * The followings are the available model relations:
 * @property PerantaraAnak[] $perantaraAnaks
 */
class DataDiriPerantara extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DataDiriPerantara the static model class
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
		return 'data_diri_perantara';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_perantara, tempat_lahir, tanggal_lahir, alamat', 'required'),
			array('nama_perantara', 'length', 'max'=>75),
			array('foto_profil', 'length', 'max'=>175),
			array('tempat_lahir, suku', 'length', 'max'=>35),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_data_diri_perantara, nama_perantara, foto_profil, tempat_lahir, tanggal_lahir, suku, alamat', 'safe', 'on'=>'search'),
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
			'perantaraAnaks' => array(self::HAS_MANY, 'PerantaraAnak', 'id_perantara'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_data_diri_perantara' => 'Id Data Diri Perantara',
			'nama_perantara' => 'Nama Perantara',
                        'id_user' => 'ID User',
			'foto_profil' => 'Foto Profil',
			'tempat_lahir' => 'Tempat Lahir',
			'tanggal_lahir' => 'Tanggal Lahir',
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

		$criteria->compare('id_data_diri_perantara',$this->id_data_diri_perantara);
		$criteria->compare('nama_perantara',$this->nama_perantara,true);
		$criteria->compare('foto_profil',$this->foto_profil,true);
		$criteria->compare('tempat_lahir',$this->tempat_lahir,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('suku',$this->suku,true);
		$criteria->compare('alamat',$this->alamat,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}