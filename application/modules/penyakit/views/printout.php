<style type="text/css">
	h1 {
		text-align: center;
	}
	table td {
		vertical-align: top;
		padding: 15px;
	}
	table > td {
		padding: 15px;
	}
</style>
<h1>Detail Jenis Penyakit</h1>
<table cellspacing="2" cellpadding="5">
	<tr>
		<td width="20%">ID</td>
		<td width="2%">:</td>
		<td width="58%"><?php echo $id; ?></td>
		<td width="20%" rowspan="3" align="center"><img src="<?php echo base_url('userfiles/'.$img);?>"></td>
	</tr>
	<tr>
		<td>Penyakit</td>
		<td>:</td>
		<td><?php echo $penyakit; ?></td>
	</tr>
	<tr>
		<td>Deskripsi</td>
		<td>:</td>
		<td><?php echo $deskripsi; ?></td>
	</tr>
</table>
