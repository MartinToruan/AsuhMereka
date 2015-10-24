<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_data_diri_perantara')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_data_diri_perantara),array('view','id'=>$data->id_data_diri_perantara)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_perantara')); ?>:</b>
	<?php echo CHtml::encode($data->nama_perantara); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto_profil')); ?>:</b>
	<?php echo CHtml::encode($data->foto_profil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tempat_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tempat_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('suku')); ?>:</b>
	<?php echo CHtml::encode($data->suku); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />


</div>