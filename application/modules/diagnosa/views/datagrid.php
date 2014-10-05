<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-table fa-fw"></i> Hasil Diagnosa
			<div class="pull-right">
				<?php echo anchor('diagnosa/check', '<i class="fa fa-plus-circle"></i> Diagnosa', 'class="btn btn-default btn-sm"'); ?>
			</div>
		</h3>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="datatable">
                        <thead>
                            <tr>
                                <th class="col-lg-2">No. Diagnosa</th>
                                <th>Nama</th>
                                <th>Kelompok</th>
                                <th>Diagnosa</th>
                                <th>Tanggal</th>
                                <th class="col-lg-1">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php foreach($result as $row) : ?>
                        	<?php
								$r = $this->db->get_where('matrix', array('no_diagnosa'=>$row->no_diagnosa, 'skor'=>$this->diagnosa_model->get_skor($row->no_diagnosa)))->row_array();
								$k = $this->db->get_where('penyakit', array('id'=>$r['id_penyakit']))->row_array();
							?>
                            <tr class="odd gradeX">
								<td><?php echo $row->no_diagnosa; ?></td>
                                <td><?php echo $row->nama; ?></td>
                                <td><?php echo $row->kelompok; ?></td>
                                <td><?php echo $k['penyakit']; ?></td>
                                <td><?php echo format_dmy($row->tanggal); ?></td>
                                <td class="center">
									<?php echo anchor('diagnosa/hasil/'.$row->no_diagnosa, '<i class="fa fa-eye"></i>', 'class="btn btn-xs" title="Detail"'); ?>
								</td>
							</tr>
							<?php endforeach; ?>
                 		</tbody>
                    </table>
                </div>
          	</div>
        </div>
    </div>
</div>
