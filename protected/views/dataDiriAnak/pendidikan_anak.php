<?php $model=DataAkademikAnak::model()->findByPk($data); ?>

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
			SD
		</td>
		<td>
			:
		</td>
		<td>
			<?php echo ($model->pendidikanSD) ? $model->pendidikanSD : "<i>Belum Sekolah</i>"; ?>
		</td>
	</tr>
	<tr>
		<td>
			SMP
		</td>
		<td>
			:
		</td>
		<td>
			<?php echo ($model->pendidikanSMP) ? $model->pendidikanSMP : "<i>Belum Sekolah</i>"; ?>
		</td>
	</tr>
	<tr>
		<td>
			SMA
		</td>
		<td>
			:
		</td>
		<td>
			<?php echo ($model->pendidikanSMA) ? $model->pendidikanSMA : "<i>Belum Sekolah</i>"; ?>
		</td>
	</tr>
</table>