/*
These functions make sure WordPress
and Foundation play nice together.
*/

function recaptchaLogin() {
	jQuery('.submit_button').removeClass('gray');
	jQuery('.submit_button').removeAttr('disabled');
}

jQuery(document).ready(function() {
	'use strict';
    // Remove empty P tags created by WP inside of Accordion and Orbit
    jQuery('.accordion p:empty, .orbit p:empty').remove();

	 // Makes sure last grid item floats left
	jQuery('.archive-grid .columns').last().addClass( 'end' );

	// Adds Flex Video to YouTube and Vimeo Embeds
  jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function() {
    if ( jQuery(this).innerWidth() / jQuery(this).innerHeight() > 1.5 ) {
      jQuery(this).wrap("<div class='widescreen flex-video'/>");
    } else {
      jQuery(this).wrap("<div class='flex-video'/>");
    }
  });
  
  //jQuery("[data-fancybox]").fancybox({});
	
});


jQuery(document).ready(function($){	
	'use strict';
	var selector = $(".full-menu");
	var children = selector.find('.menu-item-has-children');
				 
	children.each(function() {
		var _this = $(this),
			tabs = _this.find('.thb_mega_menu li'),
			contents = _this.find('.category-children>.row'); 
		
		tabs.first().addClass('active');	

		tabs.on('hover', function() {
			var _li = $(this),
				n = _li.index();
			tabs.removeClass('active');
			_li.addClass('active');
			contents.hide();
			contents.filter(':nth-child('+(n+1)+')').show();
		});
	});
	
	$(".orbit-container li").first().addClass('is-active');
	$(".orbit-bullets button").first().addClass('is-active');
	
	$("body").on("click", ".close-box", function (event) {
		event.preventDefault();
		$(this).closest('.cbxwpbkmarklistwrap').hide();
	});
	
	$('#hk-topbar-hover').click(function(e) {
        $('#mobile-drop').slideToggle('fast');
    });
	$('#name-display, .sign-drop').click(function(e) {
        $(this).next('i').next('.account-dropdown').slideToggle('fast');
		$(this).next('i').next('.account-dropdown').addClass('dropped');
    });
	$('#content').click(function(e) {
        if($('.account-dropdown').hasClass('dropped')) {
			$('.account-dropdown').slideUp('fast');
		}
    });
	$('#content').focus(function(e) {
        if($('.account-dropdown').hasClass('dropped')) {
			$('.account-dropdown').slideUp('fast');
		}
    });
	
	$(document).ready(function(){  
		var $takeover = $('.top-takeover');
		if ($takeover.hasClass('block')) {                  
			$(window).scroll(function(){                          
				if ($(this).scrollTop() > 480) { 
					$('#topbar-scroll').addClass('slide-down').removeClass('slide-up');
					if($('.account-dropdown').hasClass('dropped')) {
						$('.account-dropdown').slideUp('fast');
					}
				} else {
					$('#topbar-scroll').addClass('slide-up').removeClass('slide-down');
					if($('.account-dropdown').hasClass('dropped')) {
						$('.account-dropdown').slideUp('fast');
					}
				}
			});
		} else {
			$(window).scroll(function(){                          
				if ($(this).scrollTop() > 180) {
					$('#topbar-scroll').addClass('slide-down').removeClass('slide-up');
					if($('.account-dropdown').hasClass('dropped')) {
						$('.account-dropdown').slideUp('fast');
					}
				} else {
					$('#topbar-scroll').addClass('slide-up').removeClass('slide-down');
					if($('.account-dropdown').hasClass('dropped')) {
						$('.account-dropdown').slideUp('fast');
					}
				}
			});
		}
    });
	
	$('.related').slick({
	  infinite: true,
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  prevArrow: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
      nextArrow: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
	  responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 4,
		  }
		},
		{
		  breakpoint: 600,
		  settings: {
			slidesToShow: 2,
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 2,
		  }
		}
		],
	});
	
	$('.top_picks').slick({
	  infinite: true,
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 3000,
	  prevArrow: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
      nextArrow: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
	  responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 3,
		  }
		},
		{
		  breakpoint: 600,
		  settings: {
			slidesToShow: 2,
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 2,
		  }
		}
		],
	});
	
	$('.events-slider').slick({
	  infinite: true,
	  slidesToShow: 6,
	  slidesToScroll: 1,
	  autoplay: false,
	  prevArrow: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
      nextArrow: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
	  responsive: [
	  	{
		  breakpoint: 1600,
		  settings: {
			slidesToShow: 4,
		  }
		},
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 3,
		  }
		},
		{
		  breakpoint: 600,
		  settings: {
			slidesToShow: 2,
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
		  }
		}
		],
	});
	
	$('.ss-recommended-slider').slick({
	  infinite: true,
	  slidesToShow: 6,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 3000,
	  dots: true,
	  prevArrow: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
      nextArrow: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
	  responsive: [
	  	{
		  breakpoint: 1600,
		  settings: {
			slidesToShow: 4,
		  }
		},
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 3,
		  }
		},
		{
		  breakpoint: 600,
		  settings: {
			slidesToShow: 2,
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
		  }
		}
		],
	});
	
	$('.featured-experts').slick({
	  infinite: true,
	  slidesToShow: 6,
	  slidesToScroll: 1,
	  autoplay: false,
	  dots: true,
	  prevArrow: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
      nextArrow: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
	  responsive: [
	  	{
		  breakpoint: 1600,
		  settings: {
			slidesToShow: 4,
		  }
		},
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 3,
		  }
		},
		{
		  breakpoint: 600,
		  settings: {
			slidesToShow: 2,
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
		  }
		}
		],
	});
	
	$('.ss-video-gallery').slick({
	  infinite: true,
	  slidesToShow: 6,
	  slidesToScroll: 1,
	  autoplay: false,
	  dots: true,
	  prevArrow: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
      nextArrow: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
	  responsive: [
	  	{
		  breakpoint: 1600,
		  settings: {
			slidesToShow: 4,
		  }
		},
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 3,
		  }
		},
		{
		  breakpoint: 600,
		  settings: {
			slidesToShow: 2,
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
		  }
		}
		],
	});
	
	$('.ss-other-videos').slick({
	  infinite: true,
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  autoplay: false,
	  dots: true,
	  prevArrow: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
      nextArrow: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
	  responsive: [
	  	{
		  breakpoint: 1600,
		  settings: {
			slidesToShow: 4,
		  }
		},
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 3,
		  }
		},
		{
		  breakpoint: 600,
		  settings: {
			slidesToShow: 2,
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
		  }
		}
		],
	});
	
	
	$('.events-slider').hover(function(e) {
        $(this).find(".slick-slide").toggleClass('blur');
    });
	$('.events-slider .slick-slide').hover(function(e) {
        $(this).toggleClass('blur');
		$(this).nextAll('.slick-slide').toggleClass('shiftRight');
		$(this).prevAll('.slick-slide').toggleClass('shiftLeft');
    });
	
	$('.events-slider .ad-box, .events-slider .post-box').hover(function(e) {
		$(this).nextAll('.slick-slide').removeClass('shiftRight');
		$(this).prevAll('.slick-slide').removeClass('shiftLeft');
    });
	
	
	var timer;
    var filtered = false;
	
	function set_filter() {

		var current_text = $('.calendar-search-bar input[type="search"]' ).val(),
			current_category = $('.calendar-search-bar select option:selected').val(),
			current_date = $('.calendar-search-bar').find( '.eventdate' ).val();

		if( current_text && current_text.length > 0 )
			current_text = current_text.toLowerCase();

		if( current_category )
			current_category = current_category.toLowerCase();

		if( current_date )
			current_date = Date.parse(current_date)/1000;

		$('.events-slider').slick( 'slickUnfilter' );

		$('.events-slider').slick( 'slickFilter', function() {

			var self = $(this),
				item_categories;

			if( current_text && current_text.length > 0 ) {
				if( -1 === self.data('text').indexOf(current_text) )
					return false;
			}

			if( current_category ) {
				if( -1 === self.data('text').indexOf(current_category) )
					return false;
			}

			if( current_date ) {
				if( current_date < self.data('start_date') || current_date > self.data('end_date') )
					return false;
			}

			return true;
		});

		$('.events-slider').each( function() {
			var args = $(this).slick( 'getSlick' );

			if( 0 === args.$slides.length ) {
				$(this).closest('.cat-box-calendar').addClass('hide');
			} else {
				$(this).closest('.cat-box-calendar').removeClass('hide');
				 $(this).get(0).slick.setPosition();
			}
		});

	}
	
	$('.eventdate').datepicker({
      format: "dd/mm/yyyy"
    }).on('change', function(){
        $('.datepicker').hide();
    });
	
	
	$('.calendar-search-bar').find( 'select, .eventdate' ).on( 'change', set_filter );
	$('.calendar-search-bar input[type="search"]' ).on( 'keyup keydown', function() {
		clearTimeout(timer);
		timer = setTimeout(set_filter, 200);
	});
 
	$('#show_filters').click(function(){
		console.log($(this).text());
		$('.hidden-on-load').slideToggle('fast');
		if($(this).text().trim() == 'MORE FILTERS' ){
			$(this).text('LESS FILTERS');
		}else{
			 $(this).text('MORE FILTERS');
		}
	});
	
	 
	$( function() {
		var icons = {
		  header: "ui-icon-plus",
		  activeHeader: "ui-icon-minus",
		};
		$( "#accordion" ).accordion({
		  icons: icons,
		  collapsible: true,
		  heightStyle: "content",
		  activate: function( event, ui ) {
				if(!$.isEmptyObject(ui.newHeader.offset())) {
					$('html:not(:animated), body:not(:animated)').animate({ scrollTop: ui.newHeader.offset().top -180 }, 'slow');
				}
			}
		});
		$( "#toggle" ).button().on( "click", function() {
		  if ( $( "#accordion" ).accordion( "option", "icons" ) ) {
			$( "#accordion" ).accordion( "option", "icons", null );
		  } else {
			$( "#accordion" ).accordion( "option", "icons", icons );
		  }
		});
	  } );
	  
	$(function() {
		  $('.flexslider').flexslider({
			animation: "slide",
			animationLoop: true,
			itemWidth: 360,
			itemMargin: 0,
			smoothHeight: false,
			slideshow: false,
			touch: true,
			controlNav: false,
			
		  });
	});
	
	if ( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
	 // code here
	} else {
		$(function() {
			$('.school-head').matchHeight(
				{
					byRow: true,
					property: 'height',
					target: null,
					remove: false
				}
			);
			var i = 1;
			for (i = 1; i < 44; i++) { 
				$('.td-' + i).matchHeight(
					{
						byRow: true,
						property: 'height',
						target: null,
						remove: false
					}
				);
			}
		});
	}
	
	$('#clearall').on('click', function(){
		var detachedItem = $('.all-tables').detach();
		detachedItem.appendTo('ul.hidden-list');
	});
	
	$('#showall').on('click', function(){
		var detachedItem = $('.all-tables').detach();
		detachedItem.appendTo('ul.slides');
	});
	
	$('.show-school-logo').on('click', function(){
		var schoolID = $(this).data("id");
		var detachedItem = $('.all-tables.post-div-' + schoolID).detach();
		detachedItem.prependTo('ul.slides');
	});
	
	$('.hide-school-btn').on('click', function(){
		var schoolID = $(this).data("id");
		var detachedItem = $('.all-tables.post-div-' + schoolID).detach();
		detachedItem.appendTo('ul.hidden-list');
	});
	
	// To keep our code clean and modular, all custom functionality will be contained inside a single object literal called "multiFilter".

	var multiFilter = {
	  
	  // Declare any variables we will need as properties of the object
	  
	  $filterGroups: null,
	  $filterUi: null,
	  $reset: null,
	  groups: [],
	  outputArray: [],
	  outputString: '',
	  
	  // The "init" method will run on document ready and cache any jQuery objects we will need.
	  
	  init: function(){
		var self = this; // As a best practice, in each method we will asign "this" to the variable "self" so that it remains scope-agnostic. We will use it to refer to the parent "checkboxFilter" object so that we can share methods and properties between all parts of the object.
		
		self.$filterUi = $('#Filters');
		self.$filterGroups = $('.filter-group');
		self.$reset = $('#Reset');
		self.$container = $('#Container');
		
		self.$filterGroups.each(function(){
		  self.groups.push({
			$inputs: $(this).find('input'),
			active: [],
				tracker: false
		  });
		});
		
		self.bindHandlers();
	  },
	  
	  // The "bindHandlers" method will listen for whenever a form value changes. 
	  
	  bindHandlers: function(){
		var self = this,
			typingDelay = 300,
			typingTimeout = -1,
			resetTimer = function() {
			  clearTimeout(typingTimeout);
			  
			  typingTimeout = setTimeout(function() {
				self.parseFilters();
			  }, typingDelay);
			};
		
		self.$filterGroups
		  .filter('.checkboxes')
			.on('change', function() {
			self.parseFilters();
			});
		
		self.$filterGroups
		  .filter('.search')
		  .on('keyup change', resetTimer);
		
		self.$reset.on('click', function(e){
		  e.preventDefault();
		  self.$filterUi[0].reset();
		  self.$filterUi.find('input[type="text"]').val('');
		  self.parseFilters();
		});
	  },
	  
	  // The parseFilters method checks which filters are active in each group:
	  
	  parseFilters: function(){
		var self = this;
	 
		// loop through each filter group and add active filters to arrays
		
		for(var i = 0, group; group = self.groups[i]; i++){
		  group.active = []; // reset arrays
		  group.$inputs.each(function(){
			var searchTerm = '',
					$input = $(this),
				minimumLength = 3;
			
			if ($input.is(':checked')) {
			  group.active.push(this.value);
			  $(this).addClass('active');
			}
			else {
			  $(this).removeClass('active');
			}
			
			if ($input.is('[type="text"]') && this.value.length >= minimumLength) {
			  searchTerm = this.value
				.trim()
				.toLowerCase()
				.replace(' ', '-');
			  
			  group.active[0] = '[class*="' + searchTerm + '"]'; 
			}
		  });
			group.active.length && (group.tracker = 0);
		}
		
		self.concatenate();
	  },
	  
	  // The "concatenate" method will crawl through each group, concatenating filters as desired:
	  
	  concatenate: function(){
		var self = this,
			  cache = '',
			  crawled = false,
			  checkTrackers = function(){
			var done = 0;
			
			for(var i = 0, group; group = self.groups[i]; i++){
			  (group.tracker === false) && done++;
			}
	
			return (done < self.groups.length);
		  },
		  crawl = function(){
			for(var i = 0, group; group = self.groups[i]; i++){
			  group.active[group.tracker] && (cache += group.active[group.tracker]);
	
			  if(i === self.groups.length - 1){
				self.outputArray.push(cache);
				cache = '';
				updateTrackers();
			  }
			}
		  },
		  updateTrackers = function(){
			for(var i = self.groups.length - 1; i > -1; i--){
			  var group = self.groups[i];
	
			  if(group.active[group.tracker + 1]){
				group.tracker++; 
				break;
			  } else if(i > 0){
				group.tracker && (group.tracker = 0);
			  } else {
				crawled = true;
			  }
			}
		  };
		
		self.outputArray = []; // reset output array
	
		  do{
			  crawl();
		  }
		  while(!crawled && checkTrackers());
	
		self.outputString = self.outputArray.join();
		
		// If the output string is empty, show all rather than none:
		
		!self.outputString.length && (self.outputString = 'all'); 
		
		console.log(self.outputString); 
		
		// ^ we can check the console here to take a look at the filter string that is produced
		
		// Send the output string to MixItUp via the 'filter' method:
		
		  if(self.$container.mixItUp('isLoaded')){
			self.$container.mixItUp('filter', self.outputString);
		  }
	  }
	};
	  
	// On document ready, initialise our code.
	
	$(function(){
		  
	  // Initialize multiFilter code
		  
	  multiFilter.init();
		  
	  // Instantiate MixItUp
		  
	  $('#Container').mixItUp({
		controls: {
		  enable: false // we won't be needing these
		},
		animation: {
		  easing: 'cubic-bezier(0.86, 0, 0.07, 1)',
		  queueLimit: 3,
		  duration: 400
		}
	  });    
	});

});

WebFont.load({
	google: {
	  families: ['Cantarell', 'Playfair Display', 'Raleway']
	}
});
