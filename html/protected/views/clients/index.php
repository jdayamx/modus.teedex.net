<?php
    $this->page_title = 'Клієнти';
    if(!Yii::app()->user->isGuest) echo '<p style="float:right;margin:5px 5px 10px 10px;"><a href="/clients/create"><img src="/css/img/add.png"></a></p>';
	$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'template'=>"{items}\n{pager}",
));
?>
