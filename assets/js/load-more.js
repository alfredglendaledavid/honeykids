jQuery(function($){
	
	var button = $('.load-more');
	var loading = false;
	var scrollHandling = {
	    allow: true,
	    reallow: function() {
	        scrollHandling.allow = true;
	    },
	    delay: 400 //(milliseconds) adjust to the highest acceptable value
	};
	var maxPages = parseInt(button.attr("data-pages"));
	var nextpage = parseInt(button.attr("data-nextpage"));
	var ppp = parseInt(button.attr("data-ppp"));
	var category = parseInt(button.attr("data-category"));
	var excludeCat = button.attr("data-excludeCat");
	var hideSticky = button.attr("data-hideSticky");
	var searchterm = button.attr("data-searchterm");
	var author = button.attr("data-author");
	

	//$('body').on('click', '.load-more', function(){
	$(window).scroll(function(){
		if( ! loading && scrollHandling.allow ) {
			scrollHandling.allow = false;
			setTimeout(scrollHandling.reallow, scrollHandling.delay);
			var offset = $(button).offset().top - $(window).scrollTop();
			if( 2000 > offset ) {
				loading = true;
				$('.load-more').html('<div class="loader"><div class="dot"></div><div class="dot"></div><div class="dot"></div><div class="dot"></div><div class="dot"></div></div>');
				var data = {
					action: 'be_ajax_load_more',
					nonce: beloadmore.nonce,
					page: nextpage,
					query: beloadmore.query,
					maxPages: maxPages,
					'ppp': ppp,
					'category': category,
					'excludeCat': excludeCat,
					'hideSticky': hideSticky,
					'searchterm': searchterm,
					'author': author,
				};
			
				$.post(beloadmore.url, data, function(res) {
					if( res.success) {
						if(nextpage <= maxPages) {
							$('.post-listing').append( res.data );
							$('.button-container').append( button );
							$('.load-more').html("<span>Load More</span>");
							nextpage = nextpage + 1;
							loading = false;
						}
						else {
							$('.load-more').html("<p class='text-center'>NO MORE POSTS TO LOAD</p>");
						}
					} else {
						console.log(res);
					}
				}).fail(function(xhr, textStatus, e) {
					console.log(xhr.responseText);
				});
			}
		}
	});
		
});