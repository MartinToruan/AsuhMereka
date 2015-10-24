<?php
$form = $this->beginWidget(
    'booster.widgets.TbActiveForm',
    array(
        'id' => 'verticalForm',
    	'type' => 'horizontal',
        'htmlOptions' => array('class' => 'well'), // for inset effect
    )
);

	echo $form->textFieldGroup($model,'nama_ayah',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>75)))); ?>

	<?php echo $form->datePickerGroup($model,'tgl_lahir_ayah',array('widgetOptions'=>array('options'=>array(),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Click on Month/Year to select a different Month/Year.')); ?>

	<?php echo $form->textFieldGroup($model,'nama_ibu',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>75)))); ?>

	<?php echo $form->datePickerGroup($model,'tgl_lahir_ibu',array('widgetOptions'=>array('options'=>array(),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Click on Month/Year to select a different Month/Year.')); ?>

	<?php echo $form->textFieldGroup($model,'no_hp_1',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>12)))); ?>

	<?php echo $form->textFieldGroup($model,'no_hp_2',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>12)))); ?>

	<?php echo $form->textFieldGroup($model,'surat_pernyataan',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>175))));
 

$this->widget(
    'booster.widgets.TbButton',
    array('buttonType' => 'submit', 'label' => 'Daftar')
);
 
$this->endWidget();
unset($form);
?>

