<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $foto_profil
 *
 * The followings are the available model relations:
 * @property DataDiriPengasuh[] $dataDiriPengasuhs
 */
class User extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return User the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'user';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('username, password_hash, email', 'required'),
            array('status, created_at, updated_at', 'numerical', 'integerOnly' => true),
            array('username, password_hash, password_reset_token, email', 'length', 'max' => 255),
            array('auth_key', 'length', 'max' => 32),
            array('foto_profil', 'length', 'max' => 75),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, username, auth_key, password_hash, password_reset_token, email, status, created_at, updated_at, foto_profil', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'dataDiriPengasuhs' => array(self::HAS_MANY, 'DataDiriPengasuh', 'id_user'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'foto_profil' => 'Foto Profil',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('username', $this->username, true);
        $criteria->compare('auth_key', $this->auth_key, true);
        $criteria->compare('password_hash', $this->password_hash, true);
        $criteria->compare('password_reset_token', $this->password_reset_token, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('status', $this->status);
        $criteria->compare('created_at', $this->created_at);
        $criteria->compare('updated_at', $this->updated_at);
        $criteria->compare('foto_profil', $this->foto_profil, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function beforeSave() {
        $this->password_hash = self::hashPassword($this->password_hash);
        return (parent::beforeSave());
    }

// a password hashing method
    public static function hashPassword($_password_hash) {
        return (MD5($_password_hash));
    }

// to compare this model's password wirh a given password
    public function comparePassword($_password_hash) {
        return($this->password_hash === $this->hashPassword($_password_hash));
    }

    public static function validateChangePassword($pwd, $repwd) {
        if ($pwd === $repwd)
            return true;
        else
            return false;
    }

}
