<?php
/* @var $this ContactsController */
/* @var $model Contacts */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contacts-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
));
$this->page_title = 'Редагування контактів';?>

	<p class="note">Помічені <span class="required">*</span> обов'язкові до заповнення.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?><br>
		<?php echo $form->textField($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'license'); ?><br>
		<?php echo $form->textField($model,'license'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'index'); ?>
		<?php echo $form->textField($model,'index'); ?>

		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country'); ?>

		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?><br>
		<?php echo $form->textField($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel'); ?>
		<?php
			$this->widget('CMaskedTextField', array(
					'model' => $model,
					'attribute' => 'tel',
					'mask' => '+38 (099) 999-99-99',
					//'charMap' => array('.'=>'[\.]' , ','=>'[,]'),
					'htmlOptions' => array('size' => 15, 'maxlength'=>18)
			));
		?>

		<?php echo $form->labelEx($model,'tel1'); ?>
		<?php
			$this->widget('CMaskedTextField', array(
					'model' => $model,
					'attribute' => 'tel1',
					'mask' => '+38 (099) 999-99-99',
					//'charMap' => array('.'=>'[\.]' , ','=>'[,]'),
					'htmlOptions' => array('size' => 15, 'maxlength'=>18)
			));
		?>

		<?php echo $form->labelEx($model,'mail'); ?>
		<?php echo $form->textField($model,'mail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'site'); ?>
		<?php echo $form->textField($model,'site'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Зберегти' : 'Зберегти'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->