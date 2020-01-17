$(function() {
    "use strict";
    /*  =====  On responsive swatch left to right colunm  =====  */
    function left_colunm_swetch() {
        if ($(window).width() <= 767) {
            localStorage.setItem('display', 'wrapper');
            $('#column-right:parent').each(function() {
                $(this).insertBefore($(this).prev('#column-left'));
            });
        }
        if ($(window).width() > 767) {
            localStorage.setItem('display', 'wrapper');
            $('#column-left:parent').each(function() {
                $(this).insertBefore($(this).prev('#column-right'));
            });
        }
    }
    /*  =====  magnificPopup  =====  */
    function m_popup_select() {
        $('#product-thumbnail').magnificPopup({
            delegate: 'a',
            type: 'image',
            closeOnContentClick: false,
            closeBtnInside: false,
            mainClass: 'mfp-with-zoom mfp-img-mobile',
            image: {
                verticalFit: true,
            },
            gallery: {
                enabled: true
            },
            zoom: {
                enabled: true,
                duration: 300, // don't foget to change the duration also in CSS
                opener: function(element) {
                    return element.find('img');
                }
            }

        })
    }
    /* ===== Search  =====   */
    function search() {
        var i = $("#search-overlay-btn");
        var a = $(".search-overlay, .search-overlay .search-overlay-close");
        i.on('click', function(event) {
            $(".search-overlay").addClass("open"),
            $('.search-overlay > form > input[type="search"]').focus();
        });
        a.on('click', function(event) {
            event.target != this && "search-overlay-close" != event.target.className && 32 != event.keyCode || $(this).removeClass("open");
        });
    }

    /* ===== Grid list active  =====   */
    function gl_active() {
        $('.btn-list-grid button').on('click', function() {
            if ($(this).hasClass('grid-view')) {
                $('.btn-list-grid button').addClass('active');
                $('.btn-list-grid button.list-view').removeClass('active');
            } else if ($(this).hasClass('list-view')) {
                $('.btn-list-grid button').addClass('active');
                $('.btn-list-grid button.grid-view').removeClass('active');
            }
        });
    }
    function click_rate() {

    }

    function custom()
    {
        $('body .comment-form-rating').find('select[name="rating"]').val(5);
        $('body').find('.comment-form-author').addClass('form-group');
        $('body').find('.comment-form-email').addClass('form-group');
        $('body').find('.form-submit').addClass('form-group');
        $('body').find('#author').addClass('form-control');
        $('body').find('#email').addClass('form-control');
        $('body .form-submit').find('input[type="submit"]').addClass('btn btn-success_');
        $('body .image-additional').find('a').addClass('thumbnail');
        $('body form.cart .quantity').addClass('form-group');
        $('body button[type="submit"]').addClass('btn');

        $('body form.cart .quantity').find('input[name="quantity"]').addClass('form-control input_quantity mt_10');
        // $('body .comment-form-rating p span').find('a').html('<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>');
        $('body .comment-form-rating label').after(` 
            <div style="display:flex" id="r_star">
            <div class="star-1">
            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
            </div>
            <div class="star-2">
            <span class="fa fa-stack "><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
            </div>
            <div class="star-3">
            <span class=" fa fa-stack "><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
            </div>
            <div class="star-4">
            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
            </div>
            <div class="star-5">
            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
            </div>
            </div>
            `);
        $('body .comment-form-rating #r_star').on('click', 'div', function(){
            // console.log($(this).attr('class'));
            $('body p.stars').addClass('selected');
            $('body p.stars').find('a').removeClass('active');
            $('body p.stars').find(`.${$(this).attr('class')}`).addClass('active');
            let star = $('body .comment-form-rating p.stars span').find('a');
            var flag = true;
            let div = $('body #r_star').find('div');
            var rated = 5;
            $.each(star, function(i, v){
                // // console.log(star[i])
                
                let divi = div[i];
                // console.log(divi);
                if(flag = flag) {
                    $(divi).html('<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>');
                } else {
                    $(divi).html('<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>');
                }
                if ($(star[i]).hasClass('active')) {
                    flag = false;
                    rated = i + 1;
                    $('body .comment-form-rating').find('select[name="rating"]').val(rated);
                }
            })
        })
        

    }
    /* ===== Grid list View  =====   */
    function gl_view() {
        // Product List
        $('#list-view').on("click", function() {
            $('.row-products .product-layout > .clearfix').remove();
            $('.row-products .product-layout').attr('class', 'product-layout product-list col-xs-12');
            $('#column-left .row-products .product-layout').attr('class', 'product-layout mb_20');
            $('#column-right .row-products .product-layout').attr('class', 'product-layout mb_20');

            localStorage.setItem('product_view', 'list');

        });
        // Product Grid
        $('#grid-view').on("click", function() {
            $('.row-products .product-layout').attr('class', 'product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12');
            localStorage.setItem('product_view', 'grid');
        });
    }

    function get_product_view() {
        let product_view = localStorage.getItem('product_view');
        $('body .btn-list-grid').find('.btn-default').removeClass('active');
        if (product_view == 'list') {
            $('.row-products .product-layout > .clearfix').remove();
            $('.row-products .product-layout').attr('class', 'product-layout product-list col-xs-12');
            $('#column-left .row-products .product-layout').attr('class', 'product-layout mb_20');
            $('#column-right .row-products .product-layout').attr('class', 'product-layout mb_20');
            $('body .btn-list-grid').find('.list-view').addClass('active');
        } else {
            $('body .btn-list-grid').find('.grid-view').addClass('active');
            $('.row-products .product-layout').attr('class', 'product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12');
        }
    }
    /* ===== Timer  =====   */
    function makeTimer() {
        var endTime = new Date("August 10, 2018 12:00:00 PDT");
        var endTime = (Date.parse(endTime)) / 1000;
        var now = new Date();
        var now = (Date.parse(now) / 1000);
        var timeLeft = endTime - now;
        var days = Math.floor(timeLeft / 86400);
        var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
        var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
        var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

        if (hours < "10") { hours = "0" + hours; }
        if (minutes < "10") { minutes = "0" + minutes; }
        if (seconds < "10") { seconds = "0" + seconds; }

        $(".days").html(days + "<span>Days</span>");
        $(".hours").html(hours + "<span>Hours</span>");
        $(".minutes").html(minutes + "<span>Min</span>");
        $(".seconds").html(seconds + "<span>Sec</span>");
    }
    setInterval(function() { makeTimer(); }, 1000);
    /* ===== Login Register Tab  =====   */
    function log_reg_tab() {
        $('#login-form-link').on("click", function(e) {
            $("#login-form").delay(100).fadeIn(100);
            $("#register-form").fadeOut(100);
            $('#register-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });
        $('#register-form-link').on("click", function(e) {
            $("#register-form").delay(100).fadeIn(100);
            $("#login-form").fadeOut(100);
            $('#login-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });
    }
    /*  footer toggle */
    function footerToggle() {
        if ($(window).width() < 991) {
            $(".footer .toggle_div").remove();
            $(".footer-title").append("<a class='toggle_div'>&nbsp;</a>");
            $(".footer-title").addClass('toggle');
            $(".footer-title").addClass('active');
            $(".footer .toggle_div").on("click", function() {
                $(this).parent().toggleClass('active').parent().find('ul').slideToggle('slow');
            });
        } else {
            $(".footer-title").parent().find('ul').removeAttr('style');
            $(".footer-title").removeClass('active');
            $(".footer-title").removeClass('toggle');
            $(".footer .toggle_div").remove();
        }
    }

    function owl_carousel() {
        $('.main-banner').owlCarousel({
            autoplay: false,
            responsiveClass: true,
            dots: true,
            items: 1, //10 items above 1000px browser width
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 1,
                    nav: false
                },
                1000: {
                    items: 1,
                    nav: false,
                }
            }
        });

        $('.nArrivals , .Bestsellers , .Featured').owlCarousel({
            autoplay: false,
            responsiveClass: true,
            items: 4, //10 items above 1000px browser width
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                400: {
                    items: 2,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: true
                },
                1000: {
                    items: 3,
                    nav: true
                },
                1200: {
                    items: 4,
                    nav: true,
                }
            }
        });

        $('#featu-pro , #bests-pro , #new-pro').owlCarousel({
            autoplay: false,
            responsiveClass: true,
            items: 1, //10 items above 1000px browser width
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                480: {
                    items: 2,
                    nav: true
                },
                767: {
                    items: 2,
                    nav: true
                },
                1000: {
                    items: 1,
                    nav: true,
                }
            }
        });
        /* ===== Specials and client carousel =====   */
        $('.Specials , .client').owlCarousel({
            autoplay: false,
            responsiveClass: true,
            items: 1, //10 items above 1000px browser width
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 1,
                    nav: true
                },
                1000: {
                    items: 1,
                    nav: true,
                }
            }
        });
        /* ===== left-special carousel =====   */
        $('#left-special').owlCarousel({
            autoplay: false,
            responsiveClass: true,
            items: 1, //10 items above 1000px browser width
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                480: {
                    items: 2,
                    nav: true
                },
                768: {
                    items: 1,
                    nav: true
                },
                1000: {
                    items: 1,
                    nav: true,
                }
            }
        });
        $('.related-pro').owlCarousel({
            autoplay: false,
            responsiveClass: true,
            items: 4, //10 items above 1000px browser width
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true,
                },
                1200: {
                    items: 4,
                    nav: true,
                }
            }
        });

        /* ===== Product Thumbnail =====   */
        $('#product-thumbnail').owlCarousel({
            loop: false,
            thumbs: true,
            autoplay: false,
            items: 5, //10 items above 1000px browser width
            nav: true,
        })

        /* ===== Brand carousel =====   */
        $('.brand').owlCarousel({
            loop: true,
            autoplay: true,
            responsiveClass: true,
            items: 6, //10 items above 1000px browser width
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                400: {
                    items: 2,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: true
                },
                1000: {
                    items: 6,
                    nav: true,
                    loop: true
                }
            }
        })
        /* ===== Blog carousel =====   */
        $('.blog').owlCarousel({
            autoplay: false,
            responsiveClass: true,
            items: 2, //10 items above 1000px browser width
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: true
                },
                1000: {
                    items: 2,
                    nav: true,
                }
            }
        })

        /* ===== Team carousel =====   */
        $('.team3col').owlCarousel({
            autoplay: false,
            responsiveClass: true,
            items: 3, //10 items above 1000px browser width
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 2,
                    nav: true
                },
                1000: {
                    items: 3,
                    nav: true,
                }
            }
        });
    }

    /* ---- Page Scrollup JS Start ---- */
    //When distance from top = 250px fade button in/out
    $(window).on("scroll", function() {
        if ($(this).scrollTop() > 250) {

            $('#scrollup').fadeIn(300);
        } else {
            $('#scrollup').fadeOut(300);
        }
    });
    $('#scrollup').on("click", function() {
        $("html, body").animate({ scrollTop: 0 }, 1000);
        return false;
    });

    /* ===== Event for windows and document =====   */

    $(document).ready(function() {
        gl_active();
        get_product_view();
        gl_view();
        search();
        footerToggle();
        m_popup_select();
        log_reg_tab();
        custom();
    });

    $(window).ready(function() {

        $('[data-toggle="tooltip"]').tooltip();
        owl_carousel();
        left_colunm_swetch();
    });

    $(window).on("resize", function() {
        left_colunm_swetch();
        gl_active();
        gl_view();
        search();
        footerToggle();
    });
});
jQuery(window).on("load", function() {
    $(".loder").fadeOut("slow");
});