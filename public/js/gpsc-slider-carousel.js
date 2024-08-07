(function( $ ) {
	'use strict';

		$( document ).ready(function() {

			$(".gpsc--product-slider-carousel").each(function () {

				// Getting ID.
				var _theSlider = $(this).attr('id');
				// API.
				$('#' + _theSlider).each(function () {

					var $this = $(this),
						$direction = ($this.attr('data-direction')) ? $this.data('direction') : 'horizontal',
						$effect = ($this.attr('data-effect')) ? $this.data('effect') : 'slide',
						$slidepergroup = ($this.attr('data-slidepergroup')) ? $this.data('slidepergroup') : 1,
						$initialslide = ($this.attr('data-initialslide')) ? $this.data('initialslide') : 0,
						$speed = ($this.attr('data-speed')) ? $this.data('speed') : 300,
						$autoplay = ($this.data('autoplay')) ? $this.data('autoplay') : false,
						$bullettype = $this.data('bullettype'),
						$grabcursor = $this.data('grabcursor'),
						$lazyload = $this.data('lazyload'),
						$responsiveright = ($this.attr('data-responsiveright')) ? $this.data('responsiveright') : 2,
						$responsivebottom = ($this.attr('data-responsivebottom')) ? $this.data('responsivebottom') : 1,
						$loop = ($this.data('loop')) ? $this.data('loop') : false,
						$spacebetween = ($this.data('spacebetween')) ? $this.data('spacebetween') : 500,
						$paginationtype = ($this.data('paginationtype')) ? $this.data('paginationtype') : 500,
						$itemRows = ($this.data('row')),
						$module = ( 'grid-carousel'==$this.data('module') || 'highlighted'==$this.data('module') || 'grouped'==$this.data('module') ||'with-banner'==$this.data('module') ) ? {rows: $itemRows, fill: 'row'} : {rows: 1, fill: 'column'},
						$responsivetop = ('fade'==$this.data('effect') || 'flip'==$this.data('effect') || 'cards'==$this.data('effect')) ? 1 : $this.data('responsivetop');

					var swiper = new Swiper('#' + _theSlider + ' .swiper', {
						grabCursor: $grabcursor,
						keyboard: {enabled: true,},
						speed: $speed,
						autoplay: $autoplay.autoplay,
						loop: $loop,
						slidesPerView: $responsivebottom,
						spaceBetween: $spacebetween,
						grid: $module,
						autoHeight: ('vertical' == $direction) ? true : false,
						direction: $direction,
						effect: $effect,
						lazy: $lazyload,
						initialSlide: $initialslide,
						slidesPerGroup: $slidepergroup,
						breakpoints: {
							667: {
								slidesPerView: $responsiveright,
							},
							982: {
								slidesPerView: $responsivetop,
								spaceBetween: $spacebetween,
								grid: $module,
							}
						},
						pagination: {
							el: '#' + _theSlider + ' .gpsc-pagination',
							dynamicBullets: ('vertical' == $direction || $bullettype) ? false : true,
							clickable: true,
							type: $paginationtype,
							/*Return bullets as numbers*/
							renderBullet: $bullettype
							? function (index, className) {
								return '<span class="' + className + '">' + (index + 1) + "</span>"
							}
							: null
							
						},
						navigation: {
							nextEl: '#' + _theSlider + ' .gpsc-slider-btn-next',
							prevEl: '#' + _theSlider + ' .gpsc-slider-btn-prev',
						},
					});
				});
			});
		});

})( jQuery );
