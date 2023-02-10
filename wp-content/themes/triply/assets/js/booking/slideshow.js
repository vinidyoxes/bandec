(function ($) {
    "use strict";
    $(window).on('elementor/frontend/init', () => {
        elementorFrontend.hooks.addAction('frontend/element_ready/babe-item-slideshow.default', ($scope) => {
            if ($(".booking_single_gallery").length) {
                var currentImage = 0;
                var _height = 0;
                var $slideshow_layout = $('.triply-single-slideshow').data('layout');
                var $thumbnail = $('#booking-single-gallery-thumbnail');

                if( $slideshow_layout === 'style-1' ){
                    var $gallery = $('#booking-single-gallery-thumbnail-preview .inner').slick({
                        infinite: true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        fade: true,
                        rtl: $('body').hasClass('rtl'),
                        arrows: true,
                        adaptiveHeight: true
                    });
                }

                if( $slideshow_layout === 'style-2' ){
                    var $gallery = $('#booking-single-gallery-thumbnail-preview .inner').slick({
                        infinite: true,
                        slidesToShow: 3,
                        centerMode: false,
                        variableWidth: true,
                        slidesToScroll: 1,
                        rtl: $('body').hasClass('rtl'),
                        arrows: true,
                        adaptiveHeight: true
                    });
                }

                if( $slideshow_layout === 'style-3' ){
                    var $gallery = $('#booking-single-gallery-thumbnail-preview .inner').slick({
                        infinite: false,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        // vertical: true,
                        // verticalSwiping: true,
                        fade: true,
                        rtl: $('body').hasClass('rtl'),
                        arrows: true,
                    })
                        .on('afterChange', function (slick, currentSlide, nextSlide) {
                            $('.thumbnail-inner', $thumbnail).removeClass('active');
                            currentImage = nextSlide;
                            var $_wrap = $thumbnail.find('[data-slick-index="' + nextSlide + '"]');
                            $_wrap.addClass('active');
                            if (parseInt(nextSlide) > 5) {
                                $thumbnail.find('[data-slick-index="5"]').find('>img').attr('src', $_wrap.data('thumbnail'));
                            } else {
                                $thumbnail.find('[data-slick-index="5"]').find('>img').attr('src', $thumbnail.find('[data-slick-index="5"]').data('thumbnail'));
                            }

                        });
                }

                $thumbnail.on('click', '.thumbnail-inner', function () {
                    var isPopup = $(this).hasClass('last');
                    if (isPopup) {
                        var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, {
                            history: false,
                            focus: false,
                            index: currentImage
                        });
                        gallery.init();
                    } else {
                        var index = parseInt($(this).data('slick-index'));
                        $('.thumbnail-inner', $thumbnail).removeClass('active');
                        $(this).addClass('active');
                        currentImage = index;
                        $gallery.slick('slickGoTo', index)
                    }
                });

                // Initializes and opens PhotoSwipe
                var pswpElement = document.querySelectorAll('.pswp')[0];
                var items = $gallery.data('popup-json');
                $('.js-gallery-popup').on('click', function (event) {
                    event.preventDefault();
                    var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, {
                        history: false,
                        focus: false,
                        index: currentImage
                    });
                    gallery.init();
                });

                setTimeout(function(){
                    $(window).trigger('resize')
                }, 300);
            }

            // TabGallery
            // var $tabs = $('.booking_tab_gallery');
            // var $tabContainer = $('.slideshow-tab-container');
            // $tabs.on('click', '.js-tab-title', function (event) {
            //     event.preventDefault();
            //     if (_height === 0) {
            //         _height = $tabContainer.height();
            //     }
            //     $tabs.find('.js-tab-title').removeClass('active');
            //     var $this = $(this);
            //     $this.addClass('active');
            //
            //     var className = $this.find('a').data('action');
            //     $('.tab-content', $tabContainer).removeClass('active');
            //     if (className === 'gallery') {
            //         $('.tab-content.gallery', $tabContainer).addClass('active');
            //     } else {
            //         $('.tab-content.map', $tabContainer).addClass('active');
            //         if ($(".map-data-location").length) {
            //             initMap($('.map-data-location', $tabContainer), className, _height);
            //         }
            //     }
            // });

            $('.js-tab-popup a').magnificPopup({
                type: 'iframe',
                removalDelay: 500,
                midClick: true,
                closeBtnInside: true,
                callbacks: {
                    beforeOpen: function() {
                        this.st.mainClass = this.st.el.attr('data-effect');
                    }
                },
            });
        });
    });
    // function initMap($container, className, height) {
    //     $container.css('height', height);
    //     var lat = $container.attr('data-lat');
    //     var lng = $container.attr('data-lng');
    //     var icon = $container.attr('data-icon');
    //     var zoom_value = parseInt($container.attr('data-zoom'));
    //
    //     var mapOptions = {
    //         center: new google.maps.LatLng(lat, lng),
    //         zoom: zoom_value,
    //         styles: $container.data('color')
    //     };
    //
    //     var map = new google.maps.Map($container.get(0), mapOptions);
    //     if (className === 'map') {
    //         var marker = new google.maps.Marker({
    //             position: new google.maps.LatLng(lat, lng),
    //             map: map,
    //             icon: {
    //                 url: icon
    //             }
    //         });
    //         marker.setMap(map);
    //     } else {
    //         var panoramaOptions = {
    //             position: new google.maps.LatLng(lat, lng),
    //             pov: {
    //                 heading: 34,
    //                 pitch: 10,
    //                 zoom: 1
    //             }
    //         };
    //         var panorama = new google.maps.StreetViewPanorama($container.get(0), panoramaOptions);
    //         map.setStreetView(panorama);
    //     }
    // }
})(jQuery);
