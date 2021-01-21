<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'file-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
));
$this->page_title = 'Додавання фото';?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'file'); ?><br>
		<?php echo $form->Filefield($model,'file'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_main'); ?>
		<?php echo $form->checkbox($model,'is_main'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Завантажити'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->