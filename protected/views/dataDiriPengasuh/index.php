<?php
$this->breadcrumbs=array(
	'Data Diri Pengasuhs',
);

$this->menu=array(
array('label'=>'Create DataDiriPengasuh','url'=>array('create')),
array('label'=>'Manage DataDiriPengasuh','url'=>array('admin')),
);
?>

<h1>Data Diri Pengasuhs</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
