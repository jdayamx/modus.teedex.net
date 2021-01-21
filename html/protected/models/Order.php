<?php


class Order extends CActiveRecord
{

	public $types = array(
		1=>'Квартира',
		2=>'Будинок',
		3=>'Інше',
	);

	public $wheres = array(
		1=>'Реклама в ЗМІ',
		2=>'Пошукова система',
		3=>'Зовнішня реклама',
		4=>'По рекомендації',
		5=>'Постійний клієнт',
		6=>'Інше',
	);

	public function tableName()
	{
		return '{{order}}';
	}


	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type', 'numerical', 'integerOnly'=>true),
			array('where', 'numerical', 'integerOnly'=>true),
			array('ip', 'length', 'max'=>15),
			array('discription', 'length', 'min'=>15),
			array('address', 'length', 'min'=>5),
			array('mail','email'),
			array('name, tel, mail, discription, address', 'safe'),
			array('name, tel, mail, where, type, discription', 'required'),
			/*array('mail', 'contact'),*/
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, tel, mail, where, discription, address, type, data_create, ip', 'safe', 'on'=>'search'),
		);
	}

	/*public function contact($attributes,$params)
	{
		if($this->mail==NULL || $this->tel==NULL)
		{
			$this->addError('mail, tel','Ошибка');
		}
	}*/

	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}


	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Ваше ім’я',
			'tel' => 'Номер телефону',
			'mail' => 'E-mail',
			'where' => 'Звідки Ви про нас дізналися',
			'type' => 'Тип об’єкта',
			'discription' => 'Стислий опис об’єкта',
			'address' => 'Адреса об’єкта',
			'data_create' => 'Дата відправлення',
			'ip' => 'Ip адрес',
		);
	}


	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('mail',$this->mail,true);
		$criteria->compare('where',$this->where);
		$criteria->compare('type',$this->type);
		$criteria->compare('discription',$this->discription,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('data_create',$this->data_create,true);
		$criteria->compare('ip',$this->ip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

		public function beforeSave() {
		if($this->isNewRecord){
        	$this->ip=$_SERVER["REMOTE_ADDR"];
        	$this->data_create=date('Y-m-d H:i:s');
		} else {
			//1
		}
    	return parent::beforeSave();
	}

}
?>