<?php
$this->breadcrumbs=array(
	'Data Orangtua Anaks',
);

$this->menu=array(
array('label'=>'Create DataOrangtuaAnak','url'=>array('create')),
array('label'=>'Manage DataOrangtuaAnak','url'=>array('admin')),
);
?>

<h1>Data Orangtua Anaks</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
