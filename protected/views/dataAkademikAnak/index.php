<?php
$this->breadcrumbs=array(
	'Data Akademik Anaks',
);

$this->menu=array(
array('label'=>'Create DataAkademikAnak','url'=>array('create')),
array('label'=>'Manage DataAkademikAnak','url'=>array('admin')),
);
?>

<h1>Data Akademik Anaks</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
