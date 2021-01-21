<?php $this->page_title = 'Наші контакти';
?>
<p style="float:right;margin:5px 5px 10px 10px;"><?php if(!Yii::app()->user->isGuest) echo '<a href="/contacts/update/'.$model->id.'"><img src="/css/img/edit.png" ></a>'?>
<div class="contacts">
<p class="contacts_name">
	<?php echo $model->name ?>
</p>
<br>
	<?php echo $model->license ?>
<br><br>
	<?php echo $model->index ?>
	<?php echo $model->country ?>
	<?php echo $model->city ?>
	<?php echo $model->address ?>
<br><br>
	<?php echo $model->tel ?>
<br><br>
	<?php echo $model->tel1 ?>
<br><br>
	<?php echo $model->mail ?>
<br><br>
	<?php echo $model->site ?>
<br><br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d635.2193800049374!2d30.622748700842642!3d50.44338200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTDCsDI2JzM2LjIiTiAzMMKwMzcnMjEuOSJF!5e0!3m2!1suk!2sru!4v1432300377021" width="660" height="600" frameborder="0" style="border:0"></iframe>
</div>


