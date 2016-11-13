
$(document).ready( function() {
	$('.confirm-delete').click(function(e) {

		var prev_url = $('.modal-delete .delete').attr('href');
		var rep = prev_url.match(/[0-9]/);
        var p_url = prev_url.substring(0, (rep.index - 1) ) + '/' + $(this).data('id');
        $('#modal-delete .delete').attr('href', p_url);
        
	});
});