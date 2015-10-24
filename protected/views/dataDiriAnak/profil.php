<?php $model=DataDiriAnak::model()->findByPk($data); ?>

<head>
    <style>
        table {
            width:100%;
        }
        table, th, td {
            border: 0px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
        table#t01 tr:nth-child(even) {
            background-color: #fff;
        }
        table#t01 tr:nth-child(odd) {
            background-color:#eee;
        }
        table#t01 th	{
            background-color: black;
            color: white;

        }

    </style>
</head>

<table id="t01">
	<tr>
		<td rowspan="8" width="25%">
			<?php echo CHtml::image(Yii::app()->baseUrl."/images/anak/".$model->foto_profil, 'Foto',
					array('width'=>'226px','height'=>'340px')
				); ?>
		</td>
	</tr>
	<tr>
		<td>
			Nama Lengkap
		</td>
		<td>
			:
		</td>
		<td>
			<?php echo $model->nama_lengkap; ?>
		</td>
	</tr>
	<tr>
		<td>
			Jenis Kelamin
		</td>
		<td>
			:
		</td>
		<td>
			<?php echo $model->jenis_kelamin; ?>
		</td>
	</tr>
	<tr>
		<td>
			Tempat Lahir
		</td>
		<td>
			:
		</td>
		<td>
			<?php echo $model->tempat_lahir; ?>
		</td>
	</tr>
	<tr>
		<td>
			Tanggal Lahir
		</td>
		<td>
			:
		</td>
		<td>
			<?php echo $model->tanggal_lahir; ?>
		</td>
	</tr>
	<tr>
		<td>
			Agama
		</td>
		<td>
			:
		</td>
		<td>
			<?php echo $model->agama; ?>
		</td>
	</tr>
	<tr>
		<td>
			Suku
		</td>
		<td>
			:
		</td>
		<td>
			<?php echo $model->suku; ?>
		</td>
	</tr>
	<tr>
		<td>
			Alamat
		</td>
		<td>
			:
		</td>
		<td>
			<?php echo $model->alamat; ?>
		</td>
	</tr>
</table>


<?php /*$this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_data_diri_anak',
		'nama_lengkap',
		'foto_profil',
		'jenis_kelamin',
		'tempat_lahir',
		'tanggal_lahir',
		'agama',
		'suku',
		'alamat',
),
)); */?>