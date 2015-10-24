<center></center> 

<?php 
$form = $this->beginWidget(
    'booster.widgets.TbActiveForm',
    array(
        'id' => 'horizontalForm',
    	'type' => 'horizontal',
        'htmlOptions' => array('class' => 'well'), // for inset effect
    )
);?>
<?php
	 echo $form->textFieldGroup($model,'pendidikanSD',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>125)))); ?>

	<?php echo $form->textFieldGroup($model,'pendidikanSMP',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>125)))); ?>

	<?php echo $form->textFieldGroup($model,'pendidikanSMA',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>125))));?>
<?php $this->widget(
    'booster.widgets.TbButton',
    array('buttonType' => 'submit', 'label' => 'Daftar')
);?>

<?php
$this->endWidget();
unset($form);
