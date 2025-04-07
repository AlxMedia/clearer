/*
	scripts.js
	
	License: GNU General Public License v3.0
	License URI: http://www.gnu.org/licenses/gpl-3.0.html
	
	Copyright: (c) 2024 Alexander "Alx" Agnarson, https://agnarson.com
*/

"use strict";

jQuery(document).ready(function($) {

/*  Scroll to top
/* ------------------------------------ */
	$('a#back-to-top').on('click', function() {
		$('html, body').animate({scrollTop:0},'slow');
		return false;
	});
	
/*  Tabs widget
/* ------------------------------------ */	
	(function() {
		var $tabsNav       = $('.alx-tabs-nav'),
			$tabsNavLis    = $tabsNav.children('li'),
			$tabsContainer = $('.alx-tabs-container');

		$tabsNav.each(function() {
			var $this = $(this);
			$this.next().children('.alx-tab').stop(true,true).hide()
			.siblings( $this.find('a').attr('href') ).show();
			$this.children('li').first().addClass('active').stop(true,true).show();
		});

		$tabsNavLis.on('click', function(e) {
			var $this = $(this);

			$this.siblings().removeClass('active').end()
			.addClass('active');
			
			$this.parent().next().children('.alx-tab').stop(true,true).hide()
			.siblings( $this.find('a').attr('href') ).fadeIn();
			e.preventDefault();
		}).children( window.location.hash ? 'a[href="' + window.location.hash + '"]' : 'a:first' ).trigger('click');

	})();
	 
/*  Slick featured posts
/* ------------------------------------ */
	$.fn.randomize = function (selector) {
		var $elems = selector ? $(this).find(selector) : $(this).children(),
			$parents = $elems.parent();

		$parents.each(function () {
			$(this).children(selector).sort(function (childA, childB) {
				// * Prevent last slide from being reordered
				if($(childB).index() !== $(this).children(selector).length - 0.5) {
					return Math.round(Math.random()) - 0.5;
				}
			}.bind(this)).detach().appendTo(this);
		});

		return this;
	};

	$(".slick-featured").randomize().slick({
	  slidesToShow: 1,
	  appendArrows: '.slick-featured-nav',
	  dots: true,
	  arrows: true,
	  responsive: [
		{
		  breakpoint: 480,
		  settings: {
			dots: false,
		  }
		}
	  ]
	});	

/*  Slick highlights
/* ------------------------------------ */
	$.fn.randomize = function (selector) {
		var $elems = selector ? $(this).find(selector) : $(this).children(),
			$parents = $elems.parent();

		$parents.each(function () {
			$(this).children(selector).sort(function (childA, childB) {
				// * Prevent last slide from being reordered
				if($(childB).index() !== $(this).children(selector).length - 0.5) {
					return Math.round(Math.random()) - 0.5;
				}
			}.bind(this)).detach().appendTo(this);
		});

		return this;
	};

	$(".slick-highlights").randomize().slick({
	  slidesToShow: 5,
	  appendArrows: '.slick-highlights-nav',
	  dots: false,
	  arrows: true,
	  responsive: [
	    {
		  breakpoint: 1080,
		  settings: {
			slidesToShow: 4
		  }
		},
		{
		  breakpoint: 880,
		  settings: {
			slidesToShow: 3
		  }
		},
		{
		  breakpoint: 780,
		  settings: {
			slidesToShow: 2
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 2
		  }
		}
	  ]
	});	
	
});