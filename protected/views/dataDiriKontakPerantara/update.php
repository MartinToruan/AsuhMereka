<?php
$this->breadcrumbs=array(
	'Data Diri Kontak Perantaras'=>array('index'),
	$model->id_perantara=>array('view','id'=>$model->id_perantara),
	'Update',
);

	$this->menu=array(
	array('label'=>'List DataDiriKontakPerantara','url'=>array('index')),
	array('label'=>'Create DataDiriKontakPerantara','url'=>array('create')),
	array('label'=>'View DataDiriKontakPerantara','url'=>array('view','id'=>$model->id_perantara)),
	array('label'=>'Manage DataDiriKontakPerantara','url'=>array('admin')),
	);
	?>

	<h1>Update DataDiriKontakPerantara <?php echo $model->id_perantara; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>