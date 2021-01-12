;(function($){
	$(document).ready(function(){
		$('#loadmore').on('click',function(e){
			var nexturl = $(this).attr('href');
			$.get(nexturl,{},function(data){
				var posts = $(data).find('#posts-container').html();
				$('#posts-container').append(posts);
				var newlink = $(data).find('#loadmore').attr('href');
				if(newlink){
					$('#loadmore').attr('href',newlink);
				}else{
					$('#loadmore').hide('slow');
				}
			});
			return false;
		});

		var newlink = $('#loadmore').attr('href');
		if(!newlink){
			$('#loadmore').hide('slow');
		}

	});
})(jQuery);