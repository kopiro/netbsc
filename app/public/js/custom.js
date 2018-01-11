( function( $ ) {

    "use strict";

    $(document).ready(function($){

        var $container = $('#portfolio'),
            colWidth = function () {
                var w = $container.width(),
                    columnNum = 1,
                    columnWidth = 0;
                if (w > 1200) {
                    columnNum  = 4;
                } else if (w > 900) {
                    columnNum  = 4;
                } else if (w > 600) {
                    columnNum  = 3;
                } else if (w > 300) {
                    columnNum  = 2;
                }
                columnWidth = Math.floor(w/columnNum);
                $container.find('.portfolio-item').each(function() {
                    var $item = $(this),
                        multiplier_w = $item.attr('class').match(/item-w(\d)/),
                        multiplier_h = $item.attr('class').match(/item-h(\d)/),
                        width = multiplier_w ? columnWidth*multiplier_w[1]-4 : columnWidth-4;
                    $item.css({
                        width: width,
                    });
                });
                return columnWidth;
            }

            function refreshWaypoints() {
                setTimeout(function() {
                }, 1000);
            }

            $('nav.portfolio-filter ul a').on('click', function() {
                var selector = $(this).attr('data-filter');
                $container.isotope({ filter: selector }, refreshWaypoints());
                $('nav.portfolio-filter ul a').removeClass('active');
                $(this).addClass('active');
                return false;
            });

            function setPortfolio() {
                setColumns();
                $container.isotope('reLayout');
            }

            var isotope = function () {
                $container.isotope({
                    resizable: true,
                    itemSelector: '.portfolio-item',
                    masonry: {
                        columnWidth: colWidth(),
                        gutterWidth: 0
                    }
                });
            };
        isotope();
        $(window).smartresize(isotope);

        $.fn.viewportChecker = function(useroptions){
            // Define options and extend with user.
            var options = {
                classToAdd: 'visible',
                offset: 100,
                callbackFunction: function(elem){}
            };
            $.extend(options, useroptions);

            // Cache the given element and height of the browser
            var $elem = this,
            windowHeight = $(window).height();

            this.checkElements = function(){
                // Set some vars to check with
                var scrollElem = ((navigator.userAgent.toLowerCase().indexOf('webkit') != -1) ? 'body' : 'html'),
                viewportTop = $(scrollElem).scrollTop(),
                viewportBottom = (viewportTop + windowHeight);

                $elem.each(function(){
                    var $obj = $(this);
                    // If class already exists; quit
                    if ($obj.hasClass(options.classToAdd)){
                        return;
                    }

                    // define the top position of the element and include the offset which makes is appear earlier or later
                    var elemTop = Math.round( $obj.offset().top ) + options.offset,
                    elemBottom = elemTop + ($obj.height());

                    // Add class if in viewport
                    if ((elemTop < viewportBottom) && (elemBottom > viewportTop)){
                        $obj.addClass(options.classToAdd);

                        // Do the callback function. Callback will send the jQuery object as parameter
                        options.callbackFunction($obj);
                    }
                });
            };

            // Run checkelements on load and scroll.
            $(window).on( 'scroll', this.checkElements );
            this.checkElements();

            // On resize change the height var.
            $(window).on( 'resize', function(e){
                windowHeight = e.currentTarget.innerHeight;
            });

        };

        // Search in header.
        if( $('.search-icon').length > 0 ) {
            $('.search-icon').on('click', function(e){
              e.preventDefault();
              $('.search-box-wrap').slideToggle();
            });
        }

        // Sidr menu.
        $('#mobile-trigger').sidr({
            timing: 'ease-in-out',
            speed: 500,
            source: '#mob-menu',
            name: 'sidr-main'
        });

        // Counter up.
        $('.counter-nos').counterUp({
            delay: 10,
            time: 1000
        });

        // Fixed header.
        $(window).on('scroll', function() {
            if( $(window).scrollTop() > $('body').offset().top && !($('body').hasClass('sticky-header'))){
                $('body').addClass('sticky-header');
            }

            else if ( 0 === $(window).scrollTop() ) {
                $('body').removeClass('sticky-header');
            }
        });

        // Slick carousel.
        $(".testimonial-carousel-wrapper,.latest-news-section-wrapper").slick({
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            dots: false,
            responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            ],
            prevArrow: '<span data-role="none" class="slick-prev" tabindex="0"><i class="fa fa-angle-left" aria-hidden="true"></i></span>',
            nextArrow : '<span data-role="none" class="slick-next" tabindex="0"><i class="fa fa-angle-right" aria-hidden="true"></i></span>'
        });

        // Slick carousel.
        $(".recent-news-main-wrapper").slick({
            dots: true,
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 2,
            dots: false,
            responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            ],
            prevArrow: '<span data-role="none" class="slick-prev" tabindex="0"><i class="fa fa-angle-left" aria-hidden="true"></i></span>',
            nextArrow : '<span data-role="none" class="slick-next" tabindex="0"><i class="fa fa-angle-right" aria-hidden="true"></i></span>'
        });



        // Skil bar.
        jQuery('.skillbar').each(function(){
            jQuery(this).find('.skillbar-bar').animate({
                width:jQuery(this).attr('data-percent')
            },3000);
        });

        // Lighbox.
        jQuery('a[data-gal]').each(function() {
        jQuery(this).attr('rel', jQuery(this).data('gal'));
        });
        jQuery("a[data-gal^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',slideshow:false,overlay_gallery: false,theme:'light_square',social_tools:false,deeplinking:false});


    });

} )( jQuery );

