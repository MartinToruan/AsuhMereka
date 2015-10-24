<?php
$this->breadcrumbs=array(
	'Data Diri Perantaras'=>array('index'),
	$model->id_data_diri_perantara=>array('view','id'=>$model->id_data_diri_perantara),
	'Update',
);

	$this->menu=array(
	array('label'=>'List DataDiriPerantara','url'=>array('index')),
	array('label'=>'Create DataDiriPerantara','url'=>array('create')),
	array('label'=>'View DataDiriPerantara','url'=>array('view','id'=>$model->id_data_diri_perantara)),
	array('label'=>'Manage DataDiriPerantara','url'=>array('admin')),
	);
	?>

	<h1>Update DataDiriPerantara <?php echo $model->id_data_diri_perantara; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>