<?php

/**
 * This is the model class for table "data_orangtua_anak".
 *
 * The followings are the available columns in table 'data_orangtua_anak':
 * @property integer $id_anak
 * @property string $nama_ayah
 * @property string $tgl_lahir_ayah
 * @property string $nama_ibu
 * @property string $tgl_lahir_ibu
 * @property string $no_hp_1
 * @property string $no_hp_2
 * @property string $surat_pernyataan
 */
class DataOrangtuaAnak extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'data_orangtua_anak';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_anak, nama_ayah, tgl_lahir_ayah, nama_ibu, tgl_lahir_ibu, no_hp_1', 'required'),
			array('id_anak', 'numerical', 'integerOnly'=>true),
			array('nama_ayah, nama_ibu', 'length', 'max'=>75),
			array('no_hp_1, no_hp_2', 'length', 'max'=>12),
			array('surat_pernyataan', 'length', 'max'=>175),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_anak, nama_ayah, tgl_lahir_ayah, nama_ibu, tgl_lahir_ibu, no_hp_1, no_hp_2, surat_pernyataan', 'safe', 'on'=>'search'),
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
			'id_anak' => 'Id Anak',
			'nama_ayah' => 'Nama Ayah',
			'tgl_lahir_ayah' => 'Tgl Lahir Ayah',
			'nama_ibu' => 'Nama Ibu',
			'tgl_lahir_ibu' => 'Tgl Lahir Ibu',
			'no_hp_1' => 'No Hp 1',
			'no_hp_2' => 'No Hp 2',
			'surat_pernyataan' => 'Surat Pernyataan',
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

		$criteria->compare('id_anak',$this->id_anak);
		$criteria->compare('nama_ayah',$this->nama_ayah,true);
		$criteria->compare('tgl_lahir_ayah',$this->tgl_lahir_ayah,true);
		$criteria->compare('nama_ibu',$this->nama_ibu,true);
		$criteria->compare('tgl_lahir_ibu',$this->tgl_lahir_ibu,true);
		$criteria->compare('no_hp_1',$this->no_hp_1,true);
		$criteria->compare('no_hp_2',$this->no_hp_2,true);
		$criteria->compare('surat_pernyataan',$this->surat_pernyataan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DataOrangtuaAnak the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
