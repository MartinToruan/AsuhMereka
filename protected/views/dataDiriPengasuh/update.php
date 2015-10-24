<?php
$this->breadcrumbs=array(
	'Data Diri Pengasuhs'=>array('index'),
	$model->id_data_diri_pengasuh=>array('view','id'=>$model->id_data_diri_pengasuh),
	'Update',
);

	$this->menu=array(
	array('label'=>'List DataDiriPengasuh','url'=>array('index')),
	array('label'=>'Create DataDiriPengasuh','url'=>array('create')),
	array('label'=>'View DataDiriPengasuh','url'=>array('view','id'=>$model->id_data_diri_pengasuh)),
	array('label'=>'Manage DataDiriPengasuh','url'=>array('admin')),
	);
	?>

	<h1>Update DataDiriPengasuh <?php echo $model->id_data_diri_pengasuh; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>