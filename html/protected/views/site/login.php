<?php
$this->pageTitle=Yii::app()->name . ' - Вхід';
$this->breadcrumbs=array(
	'Вхід',
);
$this->page_title = 'Вхід';?>



<p>Будь-ласка, введіть логін та пароль для входження у свій профіль:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Помічені <span class="required">*</span> обов'язкові до заповнення.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
	</div>

	<div class="row submit">
		<?php echo CHtml::submitButton('Увійти'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
