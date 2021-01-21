<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'service-form',
	'enableAjaxValidation'=>false,
)); ?>
<?php $this->page_title = 'Додавання нової послуги';?>
<p class="note">Помічені <span class="required">*</span> обов'язкові до заповнення.</p>
<?php echo $form->errorSummary($model); ?>
<div class="row">
	<?php echo $form->labelEx($model,'title'); ?>
	<?php echo $form->textField($model,'title'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,'text'); ?>
	<?php $this->widget('application.extensions.tinymce.ETinyMce',
	                array(
	                    'model'=>$model,
						'attribute'=>'text',
	                    'useSwitch' => false,
	                    'editorTemplate'=>'full',

	                    'options' => array(
				           // 'width'=>'99%',
	                    	//'height'=>'600',
	         			),

	                    )
	                );?>
</div>
<div class="row buttons">
	<?php echo CHtml::submitButton($model->isNewRecord ? 'Створити' : 'Зберегти'); ?>
</div>
<?php $this->endWidget(); ?>
</div>