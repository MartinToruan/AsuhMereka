<?php
$this->breadcrumbs=array(
	'Data Orangtua Anaks'=>array('index'),
	$model->id_anak=>array('view','id'=>$model->id_anak),
	'Update',
);

	$this->menu=array(
	array('label'=>'List DataOrangtuaAnak','url'=>array('index')),
	array('label'=>'Create DataOrangtuaAnak','url'=>array('create')),
	array('label'=>'View DataOrangtuaAnak','url'=>array('view','id'=>$model->id_anak)),
	array('label'=>'Manage DataOrangtuaAnak','url'=>array('admin')),
	);
	?>

	<h1>Update DataOrangtuaAnak <?php echo $model->id_anak; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>