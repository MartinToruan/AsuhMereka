<?php
$this->breadcrumbs=array(
	'Data Diri Kontak Pengasuhs'=>array('index'),
	$model->id_pengasuh,
);

$this->menu=array(
array('label'=>'List DataDiriKontakPengasuh','url'=>array('index')),
array('label'=>'Create DataDiriKontakPengasuh','url'=>array('create')),
array('label'=>'Update DataDiriKontakPengasuh','url'=>array('update','id'=>$model->id_pengasuh)),
array('label'=>'Delete DataDiriKontakPengasuh','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pengasuh),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage DataDiriKontakPengasuh','url'=>array('admin')),
);
?>

<h1>View DataDiriKontakPengasuh #<?php echo $model->id_pengasuh; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_pengasuh',
		'no_handphone',
		'id_skype',
		'pin_bb',
		'id_line',
),
)); ?>
