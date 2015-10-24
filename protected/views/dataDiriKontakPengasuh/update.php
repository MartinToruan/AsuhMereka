<?php
$this->breadcrumbs=array(
	'Data Diri Kontak Pengasuhs'=>array('index'),
	$model->id_pengasuh=>array('view','id'=>$model->id_pengasuh),
	'Update',
);

	$this->menu=array(
	array('label'=>'List DataDiriKontakPengasuh','url'=>array('index')),
	array('label'=>'Create DataDiriKontakPengasuh','url'=>array('create')),
	array('label'=>'View DataDiriKontakPengasuh','url'=>array('view','id'=>$model->id_pengasuh)),
	array('label'=>'Manage DataDiriKontakPengasuh','url'=>array('admin')),
	);
	?>

	<h1>Update DataDiriKontakPengasuh <?php echo $model->id_pengasuh; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>