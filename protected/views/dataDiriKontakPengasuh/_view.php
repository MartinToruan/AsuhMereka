<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_pengasuh')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pengasuh),array('view','id'=>$data->id_pengasuh)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_handphone')); ?>:</b>
	<?php echo CHtml::encode($data->no_handphone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_skype')); ?>:</b>
	<?php echo CHtml::encode($data->id_skype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pin_bb')); ?>:</b>
	<?php echo CHtml::encode($data->pin_bb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_line')); ?>:</b>
	<?php echo CHtml::encode($data->id_line); ?>
	<br />


</div>