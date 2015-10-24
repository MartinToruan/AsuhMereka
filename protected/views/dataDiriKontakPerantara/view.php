<?php
$this->breadcrumbs=array(
	'Data Diri Kontak Perantaras'=>array('index'),
	$model->id_perantara,
);

$this->menu=array(
array('label'=>'List DataDiriKontakPerantara','url'=>array('index')),
array('label'=>'Create DataDiriKontakPerantara','url'=>array('create')),
array('label'=>'Update DataDiriKontakPerantara','url'=>array('update','id'=>$model->id_perantara)),
array('label'=>'Delete DataDiriKontakPerantara','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_perantara),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage DataDiriKontakPerantara','url'=>array('admin')),
);
?>

<h1>View DataDiriKontakPerantara #<?php echo $model->id_perantara; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_perantara',
		'no_handphone',
		'id_skype',
		'pin_bb',
		'id_line',
),
)); ?>
