<script src="<?php echo base_url('assets/js/jquery.multi-select.js');?>"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
<script>
	$(document).ready(function() {
		$(".multiselect").multiSelect();
		
		$('.date-picker').datepicker({
            format: 'dd/mm/yyyy',
           	autoclose: true
        });
	});
</script>