(function($) {
	
	var isClosed = true;
	$('a.cart').click(function(){
	if(isClosed)
	{
		$(this).addClass("active");
		$(this).removeClass("hover");
		$('form#myForm').slideDown('slow');
		isClosed = false;
	}
	else
	{
		$(this).removeClass("active");
		$('form#myForm').slideUp('slow');
		isClosed = true;
	}
	});
	
	
	$(".pane .delete").click(function(){
		$(this).parents(".pane").animate({ opacity: 'hide' }, "slow");
	});
})(jQuery);


