;(function($){
	$(document).ready(function(){

		$('#reservenow').on('click',function(){

			$.post(mealurl.ajaxurl,{
				action : 'reservation',
				rn : $('#rn').val(),
				name : $('#name').val(),
				email : $('#email').val(),
				phone : $('#phone').val(),
				persons : $('#persons').val(),
				date : $('#date').val(),
				time : $('#time').val()
			},function(data){
				console.log(data);
				if( "Duplicate" == data ){
						alert('You have aleady place for this reservation,  No need to again submit');
				}else{
					$('#paynow').attr('href',data);
					$('#reservenow').hide();
					$('#paynow').show();
				}
			});

			return false;
		});

	});
})(jQuery);