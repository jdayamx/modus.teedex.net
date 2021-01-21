<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class addphoto extends CFormModel
{
	public $file;
	public $is_main;
    public $gallery_id;
	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			//array('gallery_id', 'required'),
			array('file', 'file', 'types'=>'jpg, gif, png'),
			array('is_main', 'safe'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'file'=>'Оберіть файл',
			'is_main'=>'Зробити головною',
			'gallery_id'=>'Галерея',
		);
	}


}
