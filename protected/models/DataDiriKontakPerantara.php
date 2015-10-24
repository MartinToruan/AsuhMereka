<?php

/**
 * This is the model class for table "data_diri_kontak_perantara".
 *
 * The followings are the available columns in table 'data_diri_kontak_perantara':
 * @property integer $id_perantara
 * @property string $no_handphone
 * @property string $id_skype
 * @property string $pin_bb
 * @property string $id_line
 */
class DataDiriKontakPerantara extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DataDiriKontakPerantara the static model class
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
		return 'data_diri_kontak_perantara';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_perantara, no_handphone', 'required'),
			array('id_perantara', 'numerical', 'integerOnly'=>true),
			array('no_handphone', 'length', 'max'=>12),
			array('id_skype, id_line', 'length', 'max'=>15),
			array('pin_bb', 'length', 'max'=>8),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_perantara, no_handphone, id_skype, pin_bb, id_line', 'safe', 'on'=>'search'),
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
			'id_perantara' => 'Id Perantara',
			'no_handphone' => 'No Handphone',
			'id_skype' => 'Id Skype',
			'pin_bb' => 'Pin Bb',
			'id_line' => 'Id Line',
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

		$criteria->compare('id_perantara',$this->id_perantara);
		$criteria->compare('no_handphone',$this->no_handphone,true);
		$criteria->compare('id_skype',$this->id_skype,true);
		$criteria->compare('pin_bb',$this->pin_bb,true);
		$criteria->compare('id_line',$this->id_line,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}