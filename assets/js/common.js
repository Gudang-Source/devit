$(function() {
    $('#side-menu').metisMenu();
});
//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
$(function() {
    $(window).bind("load resize", function() {
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.sidebar-collapse').addClass('collapse')
        } else {
            $('div.sidebar-collapse').removeClass('collapse')
        }
    })
})

//Tooltips
$(function(){
	$('[title]').tooltip();
});
//Date Picker
$('.datepicker').datepicker({
	"autoclose": true,
	format: 'dd/mm/yyyy'
});
		
function confirmModal(msg,url) {
	if ($("#myModal").length > 0) {
	 	 $("#myModal").remove();
	}
	var divModal = null;
	divModal = $('<div id="myModal" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade in" />');
	divModal.append('<div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title">Konfirmasi</h4></div><div class="modal-body">'+msg+'</div><div class="modal-footer"><button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Batal</button><a href="'+url+'" class="btn btn-primary">Ya</a></div></div></div>');
	$('body').append(divModal);
	$('#myModal').modal('show');
	return false;
}
