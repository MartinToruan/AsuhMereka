<?php
$this->breadcrumbs=array(
	'Data Diri Kontak Pengasuhs'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List DataDiriKontakPengasuh','url'=>array('index')),
array('label'=>'Manage DataDiriKontakPengasuh','url'=>array('admin')),
);
?>

<h1>Create DataDiriKontakPengasuh</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>