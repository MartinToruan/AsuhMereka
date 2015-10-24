<?php
$this->breadcrumbs=array(
	'Data Diri Anaks',
);

$this->menu=array(
array('label'=>'Create DataDiriAnak','url'=>array('create')),
array('label'=>'Manage DataDiriAnak','url'=>array('admin')),
);
?>

<!--<h1>Data Diri Anaks</h1>-->

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
