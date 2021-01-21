<?php $this->page_title = $model->title;
	if(!Yii::app()->user->isGuest) echo '<p style="float:right;margin:5px 5px 10px 10px;"><a href="/service/update/'.$model->id.'"><img src="/css/img/edit.png"></a></p>';
	echo $model->text;
?>

