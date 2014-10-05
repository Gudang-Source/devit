<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-table fa-fw"></i> Jenis Penyakit
			<div class="pull-right">
				<?php echo anchor('penyakit/form_save', '<i class="fa fa-plus-circle"></i> Tambah Data', 'class="btn btn-default btn-sm"'); ?>
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
                                <th class="col-lg-2">ID</th>
                                <th>Penyakit</th>
	                            <th class="col-lg-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php foreach($penyakit as $row) : ?>
                            <tr class="odd gradeX">
								<td><?php echo $row->id; ?></td>
                                <td><?php echo $row->penyakit; ?></td>
                                <td class="center">
                                	<?php
										if (!$this->session->userdata('id'))
										{
											echo anchor('penyakit/detail_penyakit/'.$row->id, '<i class="fa fa-eye"></i>', 'class="btn btn-xs" title="Detail"');
										}
										else
										{
											echo anchor('penyakit/form_update/'.$row->id, '<i class="fa fa-edit"></i>', 'class="btn btn-xs" title="Edit"');
                            				echo anchor('penyakit/detail_penyakit/'.$row->id, '<i class="fa fa-eye"></i>', 'class="btn btn-xs" title="Detail"');
                            				echo '<a href="'.base_url().'penyakit/delete_penyakit/'.$row->id.'" onclick="return confirmModal(\'Anda akan menghapus?\',\''.base_url().'penyakit/delete_penyakit/'.$row->id.'\')" class="btn btn-xs" title="Hapus"><i class="fa fa-trash-o"></i></a>';	
										}
									?>
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
