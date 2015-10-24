<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_anak')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_anak),array('view','id'=>$data->id_anak)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_ayah')); ?>:</b>
	<?php echo CHtml::encode($data->nama_ayah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_lahir_ayah')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_lahir_ayah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_ibu')); ?>:</b>
	<?php echo CHtml::encode($data->nama_ibu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_lahir_ibu')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_lahir_ibu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_hp_1')); ?>:</b>
	<?php echo CHtml::encode($data->no_hp_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_hp_2')); ?>:</b>
	<?php echo CHtml::encode($data->no_hp_2); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('surat_pernyataan')); ?>:</b>
	<?php echo CHtml::encode($data->surat_pernyataan); ?>
	<br />

	*/ ?>

</div>