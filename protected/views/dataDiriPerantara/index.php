<?php
$this->breadcrumbs=array(
	'Data Diri Perantaras',
);

$this->menu=array(
array('label'=>'Create DataDiriPerantara','url'=>array('create')),
array('label'=>'Manage DataDiriPerantara','url'=>array('admin')),
);
?>

<h1>Data Diri Perantaras</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
