<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to 'column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='column2';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
	public $page_title='';

	public function SendMail($msg='',$tems='', $user='',$mail)
	{
		$mailer = Yii::app()->mailer;
		$mailer->Subject = $tems;
		$mailer->FromName =$user;
		$mailer->From =$mail;
		$mailer->AddAddress('modus.sm.kiev@gmail.com');
		$mailer->IsSMTP();
		$mailer->IsHTML();
		$mailer->Body = $msg;
		$mailer->Send();							// отправл€ю письмо
		$mailer->SmtpClose();
	}
}