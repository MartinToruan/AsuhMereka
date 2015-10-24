<?php
$this->breadcrumbs=array(
	'Data Diri Pengasuhs'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List DataDiriPengasuh','url'=>array('index')),
array('label'=>'Manage DataDiriPengasuh','url'=>array('admin')),
);
?>

<h1>Create DataDiriPengasuh</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>