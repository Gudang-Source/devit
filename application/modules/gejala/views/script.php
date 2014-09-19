<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-timepicker.js"></script>
<script>
	$(document).ready(function() {
		$('#datatable').dataTable({
			"aoColumnDefs": [
				{
					"bSortable": false,
					"aTargets": [-1]
				}
			]
		});
		
		$('.timepicker').timepicker({
            minuteStep: 5,
            showInputs: false,
            showMeridian: false,
            showSeconds: true,
        });
	});
</script>
