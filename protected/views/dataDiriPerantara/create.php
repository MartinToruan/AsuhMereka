<?php
$this->breadcrumbs=array(
	//'Data Diri Perantaras'=>array('index'),
	'Daftar Perantara Baru',
);

$this->menu=array(
array('label'=>'List DataDiriPerantara','url'=>array('index')),
array('label'=>'Manage DataDiriPerantara','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>