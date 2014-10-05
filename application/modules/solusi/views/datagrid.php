<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-table fa-fw"></i> Solusi Penyakit
			<div class="pull-right">
				<?php echo anchor('solusi/form', '<i class="fa fa-plus-circle"></i> Tambah Data', 'class="btn btn-default btn-sm"'); ?>
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
                                <th class="col-lg-1">No</th>
                                <th>Solusi</th>
                                <?php if($this->session->userdata('id')) { ?>
                            		<th class="col-lg-1">Aksi</th>    	
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php foreach($solusi as $row) : ?>
                            <tr class="odd gradeX">
                                <td>&nbsp;</td>
                                <td><?php echo $row->solusi; ?></td>
                                <?php if($this->session->userdata('id')) { ?>
                            		<td class="center">
	                                	<?php
											echo anchor('solusi/form/'.$row->id, '<i class="fa fa-edit"></i>', 'class="btn btn-xs" title="Edit"');
                            			echo '<a href="'.base_url().'solusi/delete_tritmen/'.$row->id.'" onclick="return confirmModal(\'Anda akan menghapus?\',\''.base_url().'solusi/delete_tritmen/'.$row->id.'\')" class="btn btn-xs" title="Hapus"><i class="fa fa-trash-o"></i></a>';	
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
