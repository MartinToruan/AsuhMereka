<?php
$this->breadcrumbs=array(
	'Data Diri Anaks'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List DataDiriAnak','url'=>array('index')),
array('label'=>'Manage DataDiriAnak','url'=>array('admin')),
);
?>

<h1>Create Data Diri Anak  -  Step 1</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model));
 ?>