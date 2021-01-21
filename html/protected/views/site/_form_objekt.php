
<?php
	$flashes = Yii::app()->user->getFlashes();
	if(count($flashes)) {
    	foreach($flashes as $key => $message) {
        	echo '<h2 class="info" style="color:white;">' . $message . "</h2>";
    	}
    	Yii::app()->clientScript->registerScript('HideEffect', '$(".info").animate({opacity: 0.9}, 3000).fadeOut("slow");');
    }

?>
<?php $this->page_title = 'Замовити';?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'order-form',
	'enableAjaxValidation'=>false,
)); ?>
	<p style="text-indent:20px;">З питань надання послуг та співпраці, прохання заповнити нижченаведену форму або зателефонуйте нам <b>+38 (044) 223-55-59</b></p>
	<p class="note">Помічені <span class="required">*</span> обов'язкові до заповнення.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>

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

		<?php echo $form->labelEx($model,'mail'); ?>
		<?php echo $form->textField($model,'mail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'where'); ?>
		<?php echo $form->dropDownList($model,'where', $model->wheres, array('empty'=>'-- Оберіть значення --')); ?>

		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->dropDownList($model,'type', $model->types, array('empty'=>'-- Оберіть значення --')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discription'); ?>
		<?php echo $form->TextArea($model,'discription'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Відправити' : 'Відправити');?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->