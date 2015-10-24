<?php $model=DataOrangtuaAnak::model()->findByPk($data); ?>

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
		<td>
			Nama Ayah
		</td>
		<td>
			:
		</td>
		<td>
			<?php echo $model->nama_ayah; ?>
		</td>
	</tr>
	<tr>
		<td>
			Tanggal Lahir Ayah
		</td>
		<td>
			:
		</td>
		<td>
			<?php echo $model->tgl_lahir_ayah; ?>
		</td>
	</tr>
	<tr>
		<td>
			Nama Ibu
		</td>
		<td>
			:
		</td>
		<td>
			<?php echo $model->nama_ibu; ?>
		</td>
	</tr>
	<tr>
		<td>
			Tanggal Lahir Ibu
		</td>
		<td>
			:
		</td>
		<td>
			<?php echo $model->nama_ibu; ?>
		</td>
	</tr>
	<tr>
		<td>
			Nomor HP 1
		</td>
		<td>
			:
		</td>
		<td>
			<?php echo $model->no_hp_1; ?>
		</td>
	</tr>
	<tr>
		<td>
			Nomor HP 2
		</td>
		<td>
			:
		</td>
		<td>
			<?php echo $model->no_hp_2; ?>
		</td>
	</tr>
</table>