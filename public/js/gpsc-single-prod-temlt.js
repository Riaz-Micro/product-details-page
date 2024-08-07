(function( $ ) {
	'use strict';

    $(document).ready(function () {

        // Remove Duplicate Reviews and Comments
        $('#comments').remove();

        // Add + and - buttons
        var quantityField = $('.quantity input[type=number]');
        quantityField.before('<button type="button" class="qty-btn qty-minus">-</button>');
        quantityField.after('<button type="button" class="qty-btn qty-plus">+</button>');
        
        // Increase quantity
        $('.qty-plus').on('click', function() {
            var currentVal = parseInt(quantityField.val());
            if (!isNaN(currentVal)) {
                quantityField.val(currentVal + 1);
            }
        });
        
        // Decrease quantity
        $('.qty-minus').on('click', function() {
            var currentVal = parseInt(quantityField.val());
            if (!isNaN(currentVal) && currentVal > 1) {
                quantityField.val(currentVal - 1);
            }
        });

        // Tabs Scroll Area
        $('.gpsc-scroll .gpsc-tab-btns button').on('click', function() {
            const target = '#' + $(this).data('target');
            $('html, body').animate({
                scrollTop: $(target).offset().top - 100
            }, 800);
        });

        // Tab Filtering Area
        const buttons = $('.gpsc-tab .gpsc-tab-btns button');
        const contents = $('.gpsc-tab .gpsc-tab-contents');
        buttons.on('click', function() {
            const target = $(this).data('target');
            contents.each(function() {
                if ($(this).attr('id') === target) {
                    $(this).fadeIn();
                } else {
                    $(this).removeClass('show').fadeOut();
                }
            });
    
            // Remove active class from all buttons
            buttons.removeClass('active');
            // Add active class to the clicked button
            $(this).addClass('active');
        });

    });
})( jQuery );


// For gallery Lightbox
document.addEventListener('DOMContentLoaded', function() {
    var initPhotoSwipeFromDOM = function(gallerySelector) {
        var parseThumbnailElements = function(el) {
            var thumbElements = el.querySelectorAll('figure'),
                numNodes = thumbElements.length,
                items = [],
                figureEl,
                linkEl,
                size,
                item;
        
            for (var i = 0; i < numNodes; i++) {
                figureEl = thumbElements[i];
                linkEl = figureEl.querySelector('a');
                size = linkEl.getAttribute('data-size').split('x');
        
                item = {
                    src: linkEl.getAttribute('href'),
                    w: parseInt(size[0], 10),
                    h: parseInt(size[1], 10)
                };
        
                if (figureEl.children.length > 1) {
                    item.title = figureEl.querySelector('figcaption').innerHTML;
                }
        
                if (linkEl.children.length > 0) {
                    item.msrc = linkEl.children[0].getAttribute('src');
                }
        
                item.el = figureEl;
                items.push(item);
            }
        
            return items;
        };
        
        var closest = function closest(el, fn) {
            return el && (fn(el) ? el : closest(el.parentNode, fn));
        };
        
        var onThumbnailsClick = function(e) {
            e = e || window.event;
            e.preventDefault ? e.preventDefault() : e.returnValue = false;
        
            var eTarget = e.target || e.srcElement;
        
            var clickedListItem = closest(eTarget, function(el) {
                return el.tagName && el.tagName.toUpperCase() === 'FIGURE';
            });
        
            if (!clickedListItem) {
                return;
            }
        
            var clickedGallery = clickedListItem.parentNode,
                childNodes = clickedListItem.parentNode.querySelectorAll('figure'),
                numChildNodes = childNodes.length,
                nodeIndex = 0,
                index;
        
            for (var i = 0; i < numChildNodes; i++) {
                if (childNodes[i] === clickedListItem) {
                    index = i;
                    break;
                }
            }
        
            if (index >= 0) {
                openPhotoSwipe(index, clickedGallery);
            }
            return false;
        };
        
        var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
            var pswpElement = document.querySelectorAll('.pswp')[0],
                gallery,
                options,
                items;
        
            items = parseThumbnailElements(galleryElement);
        
            options = {
                galleryUID: galleryElement.getAttribute('data-pswp-uid'),
                getThumbBoundsFn: function(index) {
                    var thumbnail = items[index].el.getElementsByTagName('img')[0],
                        pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                        rect = thumbnail.getBoundingClientRect();
        
                    return { x: rect.left, y: rect.top + pageYScroll, w: rect.width };
                }
            };
        
            if (fromURL) {
                if (options.galleryPIDs) {
                    for (var j = 0; j < items.length; j++) {
                        if (items[j].pid == index) {
                            options.index = j;
                            break;
                        }
                    }
                } else {
                    options.index = parseInt(index, 10) - 1;
                }
            } else {
                options.index = parseInt(index, 10);
            }
        
            if (isNaN(options.index)) {
                return;
            }
        
            if (disableAnimation) {
                options.showAnimationDuration = 0;
            }
        
            gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
            gallery.init();
        };
        
        var galleryElements = document.querySelectorAll(gallerySelector);
        
        for (var i = 0, l = galleryElements.length; i < l; i++) {
            galleryElements[i].setAttribute('data-pswp-uid', i + 1);
            galleryElements[i].onclick = onThumbnailsClick;
        }
    };
    initPhotoSwipeFromDOM('.gpsc-product-gallery');
});