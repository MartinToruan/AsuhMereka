<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldGroup($model,'id_anak',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

		<?php echo $form->textFieldGroup($model,'pendidikanSD',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>125)))); ?>

		<?php echo $form->textFieldGroup($model,'pendidikanSMP',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>125)))); ?>

		<?php echo $form->textFieldGroup($model,'pendidikanSMA',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>125)))); ?>

	<div class="form-actions">
		<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType' => 'submit',
			'context'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
