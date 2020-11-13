jQuery(function($){
	$(document).on('change','.wl-st-qty-input',function(e){
		var $this = $(this)
		var $par = $this.parent()
		var qty = $this.val()
		$('.product_type_simple', $par).data('quantity', qty)
	})

})