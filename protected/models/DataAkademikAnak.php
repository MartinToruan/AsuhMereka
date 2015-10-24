<?php

/**
 * This is the model class for table "data_akademik_anak".
 *
 * The followings are the available columns in table 'data_akademik_anak':
 * @property integer $id_anak
 * @property string $pendidikanSD
 * @property string $pendidikanSMP
 * @property string $pendidikanSMA
 */
class DataAkademikAnak extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'data_akademik_anak';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_anak', 'required'),
			array('id_anak', 'numerical', 'integerOnly'=>true),
			array('pendidikanSD, pendidikanSMP, pendidikanSMA', 'length', 'max'=>125),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_anak, pendidikanSD, pendidikanSMP, pendidikanSMA', 'safe', 'on'=>'search'),
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
			'pendidikanSD' => 'Pendidikan Sd',
			'pendidikanSMP' => 'Pendidikan Smp',
			'pendidikanSMA' => 'Pendidikan Sma',
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
		$criteria->compare('pendidikanSD',$this->pendidikanSD,true);
		$criteria->compare('pendidikanSMP',$this->pendidikanSMP,true);
		$criteria->compare('pendidikanSMA',$this->pendidikanSMA,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DataAkademikAnak the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
