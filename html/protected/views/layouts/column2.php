<?php $this->beginContent('/layouts/main'); ?>
<div class="left_panel">
	<?php $this->widget('application.components.widgets.left_meny');  ?>
<br>
	<h3 class="left_m_title">ОБЛАДНАННЯ</h3>
	<ul class="left_menu">
		<li><a href="/service/11">ПОЖЕЖНА СИГНАЛІЗАЦІЯ</a></li>
		<li><a href="/service/14">ВОГНЕГАСНИКИ</a></li>
		<li><a href="/service/15">ПОЖЕЖНІ ШАФИ</a></li>
		<li><a href="/service/12">ОХОРОННА СИГНАЛІЗАЦІЯ</a></li>
		<li><a href="/service/13">БЛИСКАВКОЗАХИСТ</a></li>
		<li><a href="/service/9">ВІДЕОСПОСТЕРЕЖЕННЯ</a></li>
		<li><a href="/service/10">КОНТРОЛЬ ДОСТУПУ</a></li>
	</ul>
	<br>
	<h3 class="left_m_title">ЗАМОВИТИ</h3>
	<ul class="left_menu" style="text-align:center;" >
	<br><a href="/site/NewObject" class="knopka">Замовити послугу</a><br><br>
	<a href="http://vk.com/modus_sm"><img src="/css/img/vk.png" ></a><br><br>
	</ul>
	<br>
	<div style="margin-left:8px;">
		<div id="minfin-informer-m1Fn-currency">Загружаем <a href="http://minfin.com.ua/currency/" target="_blank">курсы валют</a> от minfin.com.ua</a></div><script type="text/javascript">var iframe = '<ifra'+'me width="235" height="120" fram'+'eborder="0" src="http://informer.minfin.com.ua/gen/course/?color=white" vspace="0" scrolling="no" hspace="0" allowtransparency="true"style="width:235px;height:120px;ove'+'rflow:hidden;"></iframe>';var cl = 'minfin-informer-m1Fn-currency';document.getElementById(cl).innerHTML = iframe; </script><noscript></noscript>
	</div>
	<br>
	<div style="margin:0 auto;"><script type="text/javascript"><!--
	document.write("<a href='//www.liveinternet.ru/click' "+
	"target=_blank><img src='//counter.yadro.ru/hit?t28.1;r"+
	escape(document.referrer)+((typeof(screen)=="undefined")?"":
	";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
	screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
	";"+Math.random()+
	"' alt='' title='LiveInternet: показано количество просмотров и"+
	" посетителей' "+
	"border='0' width='88' height='120'><\/a>")
	//--></script><!--/LiveInternet-->
	</div>
</div>
<div class="content">
	<div class="h_zagolovok">
		<div class="h_title">
			<?php echo $this->page_title;?>
		</div>
	</div>
	<div class="c_text">
		<?php echo $content; ?>
	</div>
</div>
<?php $this->endContent(); ?>