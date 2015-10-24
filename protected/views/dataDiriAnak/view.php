<?php
$this->breadcrumbs=array(
	'Data Diri Anaks'=>array('index'),
	$model->id_data_diri_anak,
);

$this->menu=array(
array('label'=>'List DataDiriAnak','url'=>array('index')),
array('label'=>'Create DataDiriAnak','url'=>array('create')),
array('label'=>'Update DataDiriAnak','url'=>array('update','id'=>$model->id_data_diri_anak)),
array('label'=>'Delete DataDiriAnak','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_data_diri_anak),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage DataDiriAnak','url'=>array('admin')),
);
?>

<table width="100%">
    <tr>
        <td width="90%">
            <h1><?php echo $model->nama_lengkap; ?></h1>
        </td>
        <td>
            <?php
                $this->widget(
                   'booster.widgets.TbButton',
                    array(
                        'label' => 'Request Anak',
                        'context'   => 'success',
                        'buttonType'    => 'link'
                    )
                );
            ?>
        </td>
    </tr>
</table>

<?php $data = $model->id_data_diri_anak; ?>
<?php $this->widget(
    'booster.widgets.TbTabs',
    array(
        'type' => 'tabs', // 'tabs' or 'pills'
        'justified' => true,
        'tabs' => array(
            array(
                'label' => 'Profile',
                'content' => $this->renderPartial('profil', $data, true),
                'active' => true
            ),
            array('label' => 'Pendidikan', 'content' => $this->renderPartial('pendidikan_anak', $data, true)),
            array('label' => 'Data Orang Tua', 'content' => $this->renderPartial('data_orang_tua', $data, true)),
        ),
    )
); ?>
