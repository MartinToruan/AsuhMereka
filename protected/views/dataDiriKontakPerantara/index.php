<?php
$this->breadcrumbs=array(
	'Data Diri Kontak Perantaras',
);

$this->menu=array(
array('label'=>'Create DataDiriKontakPerantara','url'=>array('create')),
array('label'=>'Manage DataDiriKontakPerantara','url'=>array('admin')),
);
?>

<h1>Data Diri Kontak Perantaras</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
