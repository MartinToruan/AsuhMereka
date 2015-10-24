<?php
$this->breadcrumbs=array(
	'Data Orangtua Anaks'=>array('index'),
	$model->id_anak,
);

$this->menu=array(
array('label'=>'List DataOrangtuaAnak','url'=>array('index')),
array('label'=>'Create DataOrangtuaAnak','url'=>array('create')),
array('label'=>'Update DataOrangtuaAnak','url'=>array('update','id'=>$model->id_anak)),
array('label'=>'Delete DataOrangtuaAnak','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_anak),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage DataOrangtuaAnak','url'=>array('admin')),
);
?>

<h1>View DataOrangtuaAnak #<?php echo $model->id_anak; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_anak',
		'nama_ayah',
		'tgl_lahir_ayah',
		'nama_ibu',
		'tgl_lahir_ibu',
		'no_hp_1',
		'no_hp_2',
		'surat_pernyataan',
),
)); ?>
