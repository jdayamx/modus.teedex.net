<?php

class SiteController extends Controller
{
	public $layout='column2';

	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";
				mail(Yii::app()->params['adminEmail'],$model->subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		if (!defined('CRYPT_BLOWFISH')||!CRYPT_BLOWFISH)
			throw new CHttpException(500,"This application requires that PHP was compiled with Blowfish support for crypt().");

		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	public function actionIndex(){		$this->page_title ='Головна';		$this->render('index');	}

	public function actionService(){		$this->page_title ='Послуги';
		$this->render('service');
	}

	public function actionAbout(){
		$this->page_title ='Про компанію';
		$this->render('about');
	}

	public function actionEquipment(){
		$this->page_title ='Протипожежне обладнання';
		$this->render('equipment');
	}

	public function actionMontaj(){
		$this->page_title ='Монтаж.Обслуговування';
		$this->render('montaj');
	}

	public function actionNewObject()
    {
        $model=new Order;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Order']))
        {
            $model->attributes=$_POST['Order'];
            //$msg =$model->discription.'<br>'.$model->address.'<br>'.$model->tel.'<br>'.$model->name.'<br>'.$model->where.'<br>'.$model->type;
            $msg = '<p style="font-size:16px;">Ім’я: <b>'.$model->name.'</b><br>Номер телефону: <b>'.$model->tel.'</b><br>Електронна пошта: <b>'.$model->mail.'</b><br>Дізнались про Вас від: <b>'.$model->wheres[$model->where].'</b><br>Тип об’єкту: <b>'.$model->types[$model->type].'</b><br>Знаходится за адресою: <b>'.$model->address.'</b><br>І має такий опис: <b>'.$model->discription.'</b></p>';
			$mail = $model->mail;
			$user = $model->name;
            if($model->save()){            	$this->SendMail($msg, $tems='Новый заказ с сайта MODUS', $user,$mail);
            	Yii::app()->user->setFlash('0',"<strong>Ваше повідомлення успішно надіслано.<br>Ми зв'яжемося з вами найближчим часом</strong>");
                $this->redirect('/site/NewObject');

             }
        }

        $this->render('_form_objekt',array(
            'model'=>$model,
        ));
    }
}
