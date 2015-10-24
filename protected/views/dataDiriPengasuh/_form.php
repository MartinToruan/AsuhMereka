<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'data-diri-pengasuh-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'id_user',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'nama_pengasuh',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>75)))); ?>

	<?php echo $form->textFieldGroup($model,'foto_profil',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>175)))); ?>

	<?php echo $form->dropDownListGroup($model,'agama', array('widgetOptions'=>array('data'=>array("kristen"=>"kristen","katolik"=>"katolik","islam"=>"islam","budha"=>"budha","hindu"=>"hindu","konghucu"=>"konghucu",), 'htmlOptions'=>array('class'=>'input-large')))); ?>

	<?php echo $form->textFieldGroup($model,'suku',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>35)))); ?>

	<?php echo $form->textAreaGroup($model,'alamat', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8')))); ?>

	<?php echo $form->textAreaGroup($model,'pendidikan', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8')))); ?>

	<?php echo $form->textFieldGroup($model,'pekerjaan',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>75)))); ?>

	<?php echo $form->textFieldGroup($model,'pendapatan',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>15)))); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
