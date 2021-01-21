<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="UTF-8">
    <meta name="Keywords" content="Модус, спецтехника, спецмонтаж, пожарная охрана, охрана, молниезащита">
	<meta name="Description" content="Спецмонтаж">
    <meta name="author" content="teedex.net" />
    <title>МОДУС — <?php echo CHtml::encode($this->page_title); ?></title>
	<?php
		$baseUrl = Yii::app()->baseUrl;
		$cs = Yii::app()->getClientScript();
		$cs->scriptMap=array(
		    'jquery.js'=>'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js',
		   // 'jquery.ajaxqueue.js'=>'/js/all.js',
		   // 'jquery.metadata.js'=>'/js/all.js',

		);
		$cs->registerCoreScript( 'jquery' );
		//$cs->registerCoreScript( 'jquery.ui' );
		$cs->registerScriptFile($baseUrl.'/js/mobilyslider.js', CClientScript::POS_HEAD);
		$cs->registerScriptFile($baseUrl.'/js/init.js', CClientScript::POS_HEAD);
		$cs->registerCssFile($baseUrl.'/css/modus.css');
 		$cs->registerCssFile($baseUrl.'/css/modus-main.css');
		?>
</head>
<body>
<div class="h_bg">
</div>
<div class="conteiner_head">
	<div class="logo">
		<?=CHtml::link(CHtml::image($baseUrl.'/css/img/logo.png','',array('style'=>'height:200px;')),'/');?>
	</div>
	<div class="head_cont">
		<div style="position:absolute;margin-left:-9px;"><img src="/css/img/header.png" width="" height="" alt="" border="0"></div>
	    <?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Головна','url'=>array('/site/index')),
				array('label'=>'Про компанію','url'=>array('/site/about')),
				array('label'=>'Протипожежне обладнання','url'=>array('/site/equipment')),
				array('label'=>'Клієнти','url'=>array('/clients')),
				array('label'=>'Фотогалерея','url'=>array('/gallery')),
				array('label'=>'Послуги','url'=>array('/site/service')),
				array('label'=>'Контакти','url'=>array('/contacts/1')),

			),
			'htmlOptions' => array('class' => 'm_menu')
		));
		if(!Yii::app()->user->isGuest) echo '<div style="position:absolute;right:270px;">Ви зайшли як <span style="color:red;font-weight:bold;text-decoration:underline;">'.Yii::app()->user->name.'</span><br><a href="/site/logout" style="float:right;color:#000000;font-weight:bold;">Вихід</a></div>';
		?>
		<div class="hed_contact">
			<?php
				$model=Contacts::model()->findByPk(1);
				echo $model->tel.'<br>';
				echo $model->tel1.'<br>';
			 	echo $model->site ?>
		</div>
	</div>
	<div class="slider slider2">
		<div class="sliderContent">
			<div class="item">
				<img src="/css/img/header/3.png" alt="" />
			</div>
			<div class="item">
				<img src="/css/img/header/4.jpg" alt="" />
			</div>
			<div class="item">
				<img src="/css/img/header/5.png" alt="" />
			</div>
			<div class="item">
				<img src="/css/img/6.jpg" alt="" />
			</div>
		</div>
	</div>
</div>
<div class="conteiner">
	<div class="macmenu">
		<div class="button">
			<div class="cont"><a href="/service/7"><img src="/css/img/dym1.png"><br>Димовидалення</a></div>
			<!--<div class="cont"><a href="#"><img src="/css/img/video1.png"><br>Відеоспостереження</a></div>-->
			<div class="cont"><a href="/service/6"><img src="/css/img/moln1.png"><br>Блискавкозахист</a></div>
			<div class="cont"><a href="/service/4"><img src="/css/img/splinker1.png"><br>Системи<br> Пожежогасіння</a></div>
			<div class="cont"><a href="/service/1"><img src="/css/img/alarm1.png"><br>Пожежна<br> Сигналізація</a></div>
			<div class="cont"><a href="/service/3"><img src="/css/img/signal1.png"><br>Охоронна<br> Система</a></div>
			<div class="cont"><a href="/service/5"><img src="/css/img/biometric1.png"><br>Контроль<br> Доступу</a></div>
			<div class="cont"><a href="/service/8"><img src="/css/img/spray.png"><br>Вогнезахисна<br> Обробка</a></div>
			<div class="cont"><a href="/site/montaj"><img src="/css/img/serv.png"><br>Монтаж<br> Обслуговування</a></div>
		</div>
	</div>
<?php echo $content;?>
</div>
<div class="c_clients">
	<div class="conteiner">
		<div class="foot_menu">
			<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Головна','url'=>array('/site/index'),'itemOptions'=>array('style'=>'border-left:0;')),
				array('label'=>'Про компанію','url'=>array('/site/about')),
				array('label'=>'Протипожежне обладнання','url'=>array('/site/equipment')),
				array('label'=>'Клієнти','url'=>array('/clients')),
				array('label'=>'Фотогалерея','url'=>array('/gallery')),
				array('label'=>'Послуги','url'=>array('/site/service')),
				array('label'=>'Контакти','url'=>array('/contacts/1'),'itemOptions'=>array('style'=>'border-right:0;')),

			),
			'htmlOptions' => array('class' => 'f_menu')
		)); ?>
		</div>
		<h2>НАШІ КЛІЄНТИ</h2>
		<img src="/css/img/clients/strumok.png" width="" height="49" alt="" border="0">
		<img src="/css/img/clients/nasha_r.png" width="" height="100" alt="" border="0">
		<img src="/css/img/clients/pro100.png" width="" height="70" alt="" border="0">
		<img src="/css/img/clients/proline.png" width="" height="50" alt="" border="0">
		<img src="/css/img/clients/sunline.png" width="" height="50" alt="" border="0">
	</div>
</div>
<div class="conteiner" style="text-align:center;">
	<b>Сайт створено командою <a href="http://teedex.net" style="color:#424242;">Teedex</a> 2015р. "monya"</b>
</div>
</body>
</html>