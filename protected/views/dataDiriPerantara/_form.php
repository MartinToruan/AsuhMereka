<center><h2>Daftar Perantara Baru</h2></center>

<?php
$form = $this->beginWidget(
    'booster.widgets.TbActiveForm',
    array(
        'id' => 'verticalForm',
    	'type' => 'horizontal',
        'htmlOptions' => array('class' => 'well'), // for inset effect
    )
);
?> 
	<?php echo $form->textFieldGroup($model,'nama_perantara',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>75)))); ?>

	<?php echo $form->textFieldGroup($model,'foto_profil',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>175)))); ?>

	<?php echo $form->textFieldGroup($model,'tempat_lahir',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>35)))); ?>

	<?php echo $form->datePickerGroup($model,'tanggal_lahir',array('widgetOptions'=>array('options'=>array(),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Click on Month/Year to select a different Month/Year.')); ?>

	<?php echo $form->textFieldGroup($model,'suku',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>35)))); ?>

	<?php echo $form->textAreaGroup($model,'alamat', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8')))); ?>
<center><?php
$this->widget(
    'booster.widgets.TbButton',
    array('buttonType' => 'submit', 'label' => 'Daftar')
);
 
$this->endWidget();
unset($form);
?></center>
