<?php
$this->breadcrumbs=array(
	'Data Akademik Anaks'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List DataAkademikAnak','url'=>array('index')),
array('label'=>'Manage DataAkademikAnak','url'=>array('admin')),
);
?>

<h1>Create Data Akademik Anak   -  Step 2</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>