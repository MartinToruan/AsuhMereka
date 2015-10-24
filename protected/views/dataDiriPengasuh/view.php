<?php
$this->breadcrumbs=array(
	'Data Diri Pengasuhs'=>array('index'),
	$model->id_data_diri_pengasuh,
);

$this->menu=array(
array('label'=>'List DataDiriPengasuh','url'=>array('index')),
array('label'=>'Create DataDiriPengasuh','url'=>array('create')),
array('label'=>'Update DataDiriPengasuh','url'=>array('update','id'=>$model->id_data_diri_pengasuh)),
array('label'=>'Delete DataDiriPengasuh','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_data_diri_pengasuh),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage DataDiriPengasuh','url'=>array('admin')),
);
?>

<h1>View DataDiriPengasuh #<?php echo $model->id_data_diri_pengasuh; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_data_diri_pengasuh',
		'id_user',
		'nama_pengasuh',
		'foto_profil',
		'agama',
		'suku',
		'alamat',
		'pendidikan',
		'pekerjaan',
		'pendapatan',
),
)); ?>
