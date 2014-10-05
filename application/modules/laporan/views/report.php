<table  cellspacing="2" cellpadding="2">
	<tr>
    	<td align="center">
			<?php $this->pdf->SetFont("helvetica", "", 10); ?>
			<br />
			<p>
				<strong>Data Hasil Konsultasi</strong><br />
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
		<th class="col-lg-2">No. Diagnosa</th>
        <th>Nama</th>
        <th>Kelompok</th>
        <th>Diagnosa</th>
        <th>Tanggal</th>
    </tr>
	<?php foreach($source as $row) : ?>
    <tr>
    	<?php
			$r = $this->db->get_where('matrix', array('no_diagnosa'=>$row->no_diagnosa, 'skor'=>$this->laporan_model->get_skor($row->no_diagnosa)))->row_array();
			$k = $this->db->get_where('penyakit', array('id'=>$r['id_penyakit']))->row_array();
		?>
		<td><?php echo $row->no_diagnosa; ?></td>
        <td><?php echo $row->nama; ?></td>
        <td><?php echo $row->kelompok; ?></td>
        <td><?php echo $k['penyakit']; ?></td>        
        <td><?php echo format_dmy($row->tanggal); ?></td>
	</tr>
	<?php endforeach; ?>
</table>
