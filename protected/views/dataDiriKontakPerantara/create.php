<?php
$this->breadcrumbs=array(
	'Data Diri Kontak Perantaras'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List DataDiriKontakPerantara','url'=>array('index')),
array('label'=>'Manage DataDiriKontakPerantara','url'=>array('admin')),
);
?>

<h1>Create DataDiriKontakPerantara</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>