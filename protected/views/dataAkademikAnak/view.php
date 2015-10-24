<?php
$this->breadcrumbs=array(
	'Data Akademik Anaks'=>array('index'),
	$model->id_anak,
);

$this->menu=array(
array('label'=>'List DataAkademikAnak','url'=>array('index')),
array('label'=>'Create DataAkademikAnak','url'=>array('create')),
array('label'=>'Update DataAkademikAnak','url'=>array('update','id'=>$model->id_anak)),
array('label'=>'Delete DataAkademikAnak','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_anak),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage DataAkademikAnak','url'=>array('admin')),
);
?>

<h1>View DataAkademikAnak #<?php echo $model->id_anak; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_anak',
		'pendidikanSD',
		'pendidikanSMP',
		'pendidikanSMA',
),
)); ?>
