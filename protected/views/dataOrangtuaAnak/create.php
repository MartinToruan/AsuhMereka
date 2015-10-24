<?php
$this->breadcrumbs=array(
	'Data Orangtua Anaks'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List DataOrangtuaAnak','url'=>array('index')),
array('label'=>'Manage DataOrangtuaAnak','url'=>array('admin')),
);
?>

<h1>Create Data Orangtua Anak   - Step 3</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>