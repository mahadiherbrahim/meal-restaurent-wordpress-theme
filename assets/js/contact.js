;(function($){
	$(document).ready(function(){

		$('#send-message').on('click',function(){

			$.post(mealurl.ajaxurl,{
				action : 'contact',
				rn : $('#contact').val(),
				name : $('#cname').val(),
				email : $('#cemail').val(),
				phone : $('#cphone').val(),
				message : $('#cmessage').val()
			},function(data){
				console.log(data);
				
			});

			return false;
		});

	});
})(jQuery);