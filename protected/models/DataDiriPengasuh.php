<?php

/**
 * This is the model class for table "data_diri_pengasuh".
 *
 * The followings are the available columns in table 'data_diri_pengasuh':
 * @property integer $id_data_diri_pengasuh
 * @property integer $id_user
 * @property string $nama_pengasuh
 * @property string $foto_profil
 * @property string $agama
 * @property string $suku
 * @property string $alamat
 * @property string $pendidikan
 * @property string $pekerjaan
 * @property string $pendapatan
 *
 * The followings are the available model relations:
 * @property User $idUser
 * @property Request[] $requests
 */
class DataDiriPengasuh extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'data_diri_pengasuh';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_user, nama_pengasuh, agama, suku, alamat, pendidikan, pekerjaan, pendapatan', 'required'),
			array('id_user', 'numerical', 'integerOnly'=>true),
			array('nama_pengasuh, pekerjaan', 'length', 'max'=>75),
			array('foto_profil', 'length', 'max'=>175),
			array('agama', 'length', 'max'=>8),
			array('suku', 'length', 'max'=>35),
			array('pendapatan', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_data_diri_pengasuh, id_user, nama_pengasuh, foto_profil, agama, suku, alamat, pendidikan, pekerjaan, pendapatan', 'safe', 'on'=>'search'),
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
			'idUser' => array(self::BELONGS_TO, 'User', 'id_user'),
			'requests' => array(self::HAS_MANY, 'Request', 'id_pengasuh'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_data_diri_pengasuh' => 'Id Data Diri Pengasuh',
			'id_user' => 'Id User',
			'nama_pengasuh' => 'Nama Pengasuh',
			'foto_profil' => 'Foto Profil',
			'agama' => 'Agama',
			'suku' => 'Suku',
			'alamat' => 'Alamat',
			'pendidikan' => 'Pendidikan',
			'pekerjaan' => 'Pekerjaan',
			'pendapatan' => 'Pendapatan',
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

		$criteria->compare('id_data_diri_pengasuh',$this->id_data_diri_pengasuh);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('nama_pengasuh',$this->nama_pengasuh,true);
		$criteria->compare('foto_profil',$this->foto_profil,true);
		$criteria->compare('agama',$this->agama,true);
		$criteria->compare('suku',$this->suku,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('pendidikan',$this->pendidikan,true);
		$criteria->compare('pekerjaan',$this->pekerjaan,true);
		$criteria->compare('pendapatan',$this->pendapatan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DataDiriPengasuh the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
