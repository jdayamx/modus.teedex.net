<?php

/**
 * This is the model class for table "{{gallery}}".
 *
 * The followings are the available columns in table '{{gallery}}':
 * @property integer $id
 * @property string $title
 * @property string $discription
 * @property string $time
 * @property string $main_photo
 */
class Gallery extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{gallery}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('main_photo', 'length', 'max'=>200),
			array('title, discription, time', 'safe'),
			array('title, time', 'required'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, discription, time, main_photo', 'safe', 'on'=>'search'),
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
			'title' => 'Назва',
			'discription' => 'Опис',
			'time' => 'Час',
			'main_photo' => 'Зробити головним?',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('discription',$this->discription,true);
		$criteria->compare('time',$this->time,true);
		$criteria->compare('main_photo',$this->main_photo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Gallery the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getPhotos() {
		$path 		= Yii::getPathOfAlias('webroot');
		$img_path 	= Yii::getPathOfAlias('webroot.css.img.photogallery');
		$images = array();
		 foreach( CFileHelper::findFiles($img_path,array(
				'fileTypes' => array('png','jpg','jpeg','gif'),

			)) as $k=>$file) {
				$info = pathinfo($file);
				if(preg_match('~'.$this->id.'_.*~ui',$info['filename'])) {
                    $list=explode('_',$info['filename']);
					$img_link = str_replace($path,'',$img_path);
					$img_link .= DIRECTORY_SEPARATOR.$info['basename'];
					if(preg_match('~'.$this->id.'_mini_.*~ui',$info['filename'])) {
		            	$images['mini'][$list[count($list)-1]] = str_replace($path,'',$img_path).'/mini/'.$info['basename'];
					}
					else {
						$images['big'][$list[count($list)-1]] = $img_link;
					}
					//$images['big'][$k] = $img_link;
					//$images['mini'][$k] = str_replace($path,'',$img_path).'/mini/'.str_replace($this->id.'_',$this->id.'_mini_',$info['basename']);
					//echo '<pre>'.print_r($list[count($list)-1], true).'</pre>';
				}
			}
		return $images;
	}
}
