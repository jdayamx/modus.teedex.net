<?php
$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Помилка',
);
$this->page_title = 'Помилка';
?>
<div style="width:680px; text-align:center;" class="error">
<h1>Помилка <?php echo $code; ?></h1>


<?php echo CHtml::encode($message); ?><br>
<img src="/css/img/viu.gif" width="" height="" alt="" border="0">
</div>