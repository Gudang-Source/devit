<table  cellspacing="2" cellpadding="2">
	<tr>
    	<td align="center">
			<?php $this->pdf->SetFont("helvetica", "", 10); ?>
			<br />
			<p>
				<strong><?php echo $title; ?></strong><br />
				Periode<br />
				<?php
					$no =1; 
					echo $periode; 
				?>
			</p>
		</td> 
	</tr>
</table>
<br />
<table cellspacing="2" cellpadding="5" border="1">
	<tr>
		<th align="center" width="5%"><strong>No</strong></th>
		<th align="center" width="15%"><strong>Tanggal</strong></th>
		<th align="center" width="15%"><strong>Waktu</strong></th>
		<th align="center" width="5%"><strong>L/ P</strong></th>
		<th align="center" width="16%"><strong>Bobot/ Panjang</strong></th>
		<th align="center" width="18%"><strong>Pasien</strong></th>
		<th align="center" width="26%"><strong>Alamat</strong></th>
	</tr>
	<?php foreach($source as $row) : ?>
	<tr>
		<td align="center"><?php echo $no++; ?></td>
		<td align="center"><?php echo format_dmy($row->tanggal); ?></td>
		<td align="center"><?php echo $row->waktu; ?></td>
		<td align="center"><?php echo $row->jk; ?></td>
		<td align="center"><?php echo $row->berat."gr/ ".$row->panjang."cm"; ?></td>
		<td><?php echo $row->pasien; ?></td>
		<td><?php echo $row->alamat; ?></td>
	</tr>
	<?php endforeach; ?>
</table>
