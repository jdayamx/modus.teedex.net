<?php
$this->widget('application.extensions.fancybox.EFancyBox', array(
    'target'=>'a[rel=gallery]',
    'config'=>array(
    	'overlayOpacity' => 0.3,
	    'titleShow' => false,
    ),
    )
);

if(!Yii::app()->user->isGuest) echo '<p style="float:right;margin:5px 5px 10px 10px;">'.CHtml::link(CHtml::image('/css/img/add.png',''),array('gallery/addphoto','id'=>$model->id)).'</p>';
$this->page_title = $model->title;


foreach($model->photos['mini'] as $k=>$photo) {
	echo CHtml::link(CHtml::image($photo,$k,array('style'=>'padding:2px;border:1px solid darkred;width:200px;height:135px;margin:5px 5px 5px 5px;')),$model->photos['big'][$k],array('rel'=>'gallery','title'=>$model->title));
}

//echo '<pre>'.print_r($model->photos, true).'</pre>';

?>
