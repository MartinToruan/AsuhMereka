<?php
$this->breadcrumbs=array(
	'Data Diri Perantaras'=>array('index'),
	$model->id_data_diri_perantara,
);

$this->menu=array(
array('label'=>'List DataDiriPerantara','url'=>array('index')),
array('label'=>'Create DataDiriPerantara','url'=>array('create')),
array('label'=>'Update DataDiriPerantara','url'=>array('update','id'=>$model->id_data_diri_perantara)),
array('label'=>'Delete DataDiriPerantara','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_data_diri_perantara),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage DataDiriPerantara','url'=>array('admin')),
);
?>

<h1>View DataDiriPerantara #<?php echo $model->id_data_diri_perantara; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_data_diri_perantara',
		'nama_perantara',
		'foto_profil',
		'tempat_lahir',
		'tanggal_lahir',
		'suku',
		'alamat',
),
)); ?>
