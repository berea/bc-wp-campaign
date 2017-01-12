(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away

		// Menu toggle
		$('#menu-toggle').click(function(){
			$('body').toggleClass('menu-open');
		})
		$('#main-menu .shadow').click(function(){
			$('body').removeClass('menu-open');
		})

		// Front Gallery
		var galleryIndex = 1,
			gallerySelector = $('#gallery .images, #gallery .pager');

		var galleryActivate = function(index) {
			galleryIndex = index;
			gallerySelector.find('li').attr('class', '');
			gallerySelector.find('li:nth-child(' + index + ')').attr('class', 'active');
		}

		gallerySelector.find('li').click(function(){
			var index = $(this).parent().children().index($(this)) + 1;
			if (index != galleryIndex && index != -1) {
				galleryActivate(index);
			}
		})


		// Front Profiles
		var vCount = $('.vignette').length;
		$('.vignette:first-child').addClass('active');

		$('#vignettes .controls i').click(function(){
			var index = $('.vignette').index($('.vignette.active')) + 1;
			console.log(index);
			if ($(this).hasClass('left')) index--;
			else index++;

			$('.vignette.active').removeClass('active');

			if (index == 0) {
				$('.vignette:last-child').addClass('active');
			}
			else if (index > vCount) {
				$('.vignette:first-child').addClass('active');
			}
			else {

				$('.vignette:nth-child(' + index + ')').addClass('active');
			}
		});

		// General Photo Galliers in posts
		$('.berea-gallery-item:first-child').addClass('active');
		$('.berea-gallery-wrapper .controls i').click(function(){
			var me = $(this),
				gal = me.parents('.berea-gallery-wrapper'),
				current = gal.find('.active'),
				next;
			if (me.hasClass('next')) {
				next = current.next();
				if (next.length == 0) {
					next = gal.find('.berea-gallery-item:first-child');
				}
			}
			else {
				next = current.prev();
				if (next.length == 0) {
					next = gal.find('.berea-gallery-item:last-child');
				}
			}
			current.removeClass('active');
			next.addClass('active');
		})
		
	});
	
})(jQuery, this);
