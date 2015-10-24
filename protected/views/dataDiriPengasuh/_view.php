<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_data_diri_pengasuh')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_data_diri_pengasuh),array('view','id'=>$data->id_data_diri_pengasuh)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_pengasuh')); ?>:</b>
	<?php echo CHtml::encode($data->nama_pengasuh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto_profil')); ?>:</b>
	<?php echo CHtml::encode($data->foto_profil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agama')); ?>:</b>
	<?php echo CHtml::encode($data->agama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('suku')); ?>:</b>
	<?php echo CHtml::encode($data->suku); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pendidikan')); ?>:</b>
	<?php echo CHtml::encode($data->pendidikan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pekerjaan')); ?>:</b>
	<?php echo CHtml::encode($data->pekerjaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pendapatan')); ?>:</b>
	<?php echo CHtml::encode($data->pendapatan); ?>
	<br />

	*/ ?>

</div>