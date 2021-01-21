<?php
/* @var $this ClientsController */
/* @var $data Clients */
?>
<div class="view">
<div id="name">
	<b><?php echo CHtml::encode($data->name); ?></b>
	<p style="float:right;margin:5px 0px 0px 6px;"><?php if(!Yii::app()->user->isGuest) echo '<a href="/clients/update/'.$data->id.'"><img src="/css/img/edit.png"></a>' ?></p>
</div>
<br>
<div id="photo">
	<?php echo '<img src="/css/img/'.$data->img.'" width="650px" >' ?>
</div>
<br><br>
</div>