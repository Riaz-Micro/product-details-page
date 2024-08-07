(function( $ ) {
    'use strict';
    $( document ).ready(function() {

        var $this = $('.gpsc-gallery-carousel'),
            $speed = ($this.attr('data-speed')) ? $this.data('speed') : 300,
            $autoplay = ($this.data('autoplay')),
            $loop = ($this.data('loop')) ? $this.data('loop') : false,
            $spacebetween = ($this.data('spacebetween')) ? $this.data('spacebetween') : 15,
            $slidesperview = ($this.data('slidesperview')) ? $this.data('slidesperview') : 4,
            $paginationtype = ($this.data('paginationtype')) ? $this.data('paginationtype') : 500;

        /**
         * Swiper init.
         */
        var swiper = new Swiper('.gpsc-gallery-carousel', {
            slidesPerView: $slidesperview,
            spaceBetween: $spacebetween,
            speed: $speed,
            loop: $loop,
            autoplay: $autoplay.autoplay,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
				dynamicBullets: true,
                type: $paginationtype,
            },
        });

        /**
         * VenoBox init.
         */
        new VenoBox({
            selector        : '.venobox',
            maxWidth        : '100vh',
            overlayColor    : 'rgba(23, 23, 23, 0.95)',
            popup           : true,
            ratio           : '16x9',
            share           : false,
            shareStyle      : 'bar',
            spinner         : 'bounce',
            spinColor       : '#d2d2d2',
            toolsBackground : '#1C1C1C',
            toolsColor      : '#d2d2d2'
        });
    });
})( jQuery );