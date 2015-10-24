<?php
$this->breadcrumbs=array(
	'Data Diri Kontak Pengasuhs',
);

$this->menu=array(
array('label'=>'Create DataDiriKontakPengasuh','url'=>array('create')),
array('label'=>'Manage DataDiriKontakPengasuh','url'=>array('admin')),
);
?>

<h1>Data Diri Kontak Pengasuhs</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
