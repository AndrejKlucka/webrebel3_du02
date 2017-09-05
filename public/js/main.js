(function($) {

	/**
	 * INSERT FORM
	$('#add-form').find('#text').val('').focus();
	 */


	/**
	 * EDIT FORM
	 */
	$('#edit-form').find('#text').select();


	/**
	$('#delete-link').on('submit', function(event) {
		console.log('Delete item ... ');
		return confirm('for sure?');
	});
	 * DELETE FORM
	$('#delete-link').click(function(){
		console.log('Delete item ...');
	});
	 */

}(jQuery));