<?php

/**
 * This is the model class for table "{{contacts}}".
 *
 * The followings are the available columns in table '{{contacts}}':
 * @property integer $id
 * @property string $name
 * @property string $license
 * @property string $index
 * @property string $country
 * @property string $city
 * @property string $address
 * @property string $tel
 * @property string $tel1
 * @property string $mail
 * @property string $site
 */
class Contacts extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{contacts}}';
	}
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, license, index, country, city, address, tel, tel1, mail, site', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, license, index, country, city, address, tel, tel1, mail, site', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'name' => 'Назва',
			'license' => 'Ліцензія',
			'index' => 'Індекс',
			'country' => 'Країна',
			'city' => 'Місто',
			'address' => 'Адреса',
			'tel' => 'Телефон',
			'tel1' => 'Телефон 2',
			'mail' => 'e-mail',
			'site' => 'Сайт',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('license',$this->license,true);
		$criteria->compare('index',$this->index,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('tel1',$this->tel1,true);
		$criteria->compare('mail',$this->mail,true);
		$criteria->compare('site',$this->site,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Contacts the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
