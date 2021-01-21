<?php
/* @var $this GalleryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Galleries',
);
if(!Yii::app()->user->isGuest) echo '<p style="float:right;margin:5px 5px 10px 10px;"><a href="/gallery/create"><img src="/css/img/add.png"></a></p>';
$this->page_title = 'Фотогалерея';
$this->menu=array(
	array('label'=>'Create Gallery', 'url'=>array('create')),
	array('label'=>'Manage Gallery', 'url'=>array('admin')),
);

?>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'template'=>'{items}'
)); ?>
