<?php
$this->breadcrumbs=array(
	'Data Diri Anaks'=>array('index'),
	$model->id_data_diri_anak=>array('view','id'=>$model->id_data_diri_anak),
	'Update',
);

	$this->menu=array(
	array('label'=>'List DataDiriAnak','url'=>array('index')),
	array('label'=>'Create DataDiriAnak','url'=>array('create')),
	array('label'=>'View DataDiriAnak','url'=>array('view','id'=>$model->id_data_diri_anak)),
	array('label'=>'Manage DataDiriAnak','url'=>array('admin')),
	);
	?>

	<h1>Update DataDiriAnak <?php echo $model->id_data_diri_anak; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>