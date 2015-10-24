<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldGroup($model,'id_data_diri_anak',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

		<?php echo $form->textFieldGroup($model,'nama_lengkap',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>75)))); ?>

		<?php echo $form->textFieldGroup($model,'foto_profil',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>150)))); ?>

		<?php echo $form->dropDownListGroup($model,'jenis_kelamin', array('widgetOptions'=>array('data'=>array("laki-laki"=>"laki-laki","perempuan"=>"perempuan",), 'htmlOptions'=>array('class'=>'input-large')))); ?>

		<?php echo $form->textFieldGroup($model,'tempat_lahir',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>35)))); ?>

		<?php echo $form->datePickerGroup($model,'tanggal_lahir',array('widgetOptions'=>array('options'=>array(),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Click on Month/Year to select a different Month/Year.')); ?>

		<?php echo $form->dropDownListGroup($model,'agama', array('widgetOptions'=>array('data'=>array("kristen"=>"kristen","katolik"=>"katolik","islam"=>"islam","hindu"=>"hindu","budha"=>"budha","konghucu"=>"konghucu",), 'htmlOptions'=>array('class'=>'input-large')))); ?>

		<?php echo $form->textFieldGroup($model,'suku',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>35)))); ?>

		<?php echo $form->textAreaGroup($model,'alamat', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8')))); ?>

	<div class="form-actions">
		<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType' => 'submit',
			'context'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
