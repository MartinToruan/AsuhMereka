<?php
$this->breadcrumbs=array(
	'Data Akademik Anaks'=>array('index'),
	$model->id_anak=>array('view','id'=>$model->id_anak),
	'Update',
);

	$this->menu=array(
	array('label'=>'List DataAkademikAnak','url'=>array('index')),
	array('label'=>'Create DataAkademikAnak','url'=>array('create')),
	array('label'=>'View DataAkademikAnak','url'=>array('view','id'=>$model->id_anak)),
	array('label'=>'Manage DataAkademikAnak','url'=>array('admin')),
	);
	?>

	<h1>Update DataAkademikAnak <?php echo $model->id_anak; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>