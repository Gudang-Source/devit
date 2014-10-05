<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-table fa-fw"></i> Relasi Penyakit & Gejala
			<div class="pull-right">
				<?php echo anchor('relasi/form', '<i class="fa fa-plus-circle"></i> Tambah Data', 'class="btn btn-default btn-sm"'); ?>
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
                                <th class="col-lg-1">NO</th>
                                <th>Pengakit</th>
                                <th>Gejala</th>
                                <th>CF</th>
                                <?php if($this->session->userdata('id')) { ?>
                            		<th class="col-lg-1">Aksi</th>    	
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php foreach($rules as $row) : ?>
                            <tr class="odd gradeX">
                                <td>&nbsp;</td>
                                <td><?php echo $row->penyakit; ?></td>
                                <td><?php echo $row->gejala; ?></td>
                                <td><?php echo $row->cf; ?></td>
                                <?php if($this->session->userdata('id')) { ?>
                            		<td class="center">
	                                	<?php
											echo anchor('relasi/form/'.$row->id, '<i class="fa fa-edit"></i>', 'class="btn btn-xs" title="Edit"');
                            				echo '<a href="'.base_url().'relasi/delete_rule/'.$row->id.'" onclick="return confirmModal(\'Anda akan menghapus?\',\''.base_url().'relasi/delete_rule/'.$row->id.'\')" class="btn btn-xs" title="Hapus"><i class="fa fa-trash-o"></i></a>';	
										?>
									</td>    	
                                <?php } ?>
                            </tr>
							<?php endforeach; ?>
                 		</tbody>
                    </table>
                </div>
          	</div>
        </div>
    </div>
</div>
