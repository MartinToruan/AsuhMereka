<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_anak')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_anak),array('view','id'=>$data->id_anak)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pendidikanSD')); ?>:</b>
	<?php echo CHtml::encode($data->pendidikanSD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pendidikanSMP')); ?>:</b>
	<?php echo CHtml::encode($data->pendidikanSMP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pendidikanSMA')); ?>:</b>
	<?php echo CHtml::encode($data->pendidikanSMA); ?>
	<br />


</div>