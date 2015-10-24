<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'data-diri-kontak-perantara-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'id_perantara',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'no_handphone',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>12)))); ?>

	<?php echo $form->textFieldGroup($model,'id_skype',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>15)))); ?>

	<?php echo $form->textFieldGroup($model,'pin_bb',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>8)))); ?>

	<?php echo $form->textFieldGroup($model,'id_line',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>15)))); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
