<?php
function pveser_theme_styles() {
    //Register style name

    // wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=vietnamese', array(), '', 'all');
    wp_enqueue_style('boostrap', __THEME_HOST.'/assets/css/bootstrap.css', array(), rand(), 'all');
    wp_enqueue_style('font-awesome', __THEME_HOST.'/assets/css/font-awesome.min.css', array(), rand(), 'all');
    // wp_enqueue_style('jquery-ui', __THEME_HOST.'/assets/css/jquery-ui.min.css', array(), rand(), 'all');
    // wp_enqueue_style('fancybox', __THEME_HOST.'/assets/css/fancybox.min.css', array(), rand(), 'all');
    // wp_enqueue_style('owl-carousel', __THEME_HOST.'/assets/css/owl.carousel.min.css', array(), rand(), 'all');
    // wp_enqueue_style('owl-theme', __THEME_HOST.'/assets/css/owl.theme.default.min.css', array(), rand(), 'all');
    // wp_enqueue_style('slick', __THEME_HOST.'/assets/css/slick.css', array(), rand(), 'all');
    // wp_enqueue_style('slick-theme', __THEME_HOST.'/assets/css/slick-theme.css', array(), rand(), 'all');
    // wp_enqueue_style('clear-bootstrap', __THEME_HOST.'/assets/css/clear-bootstrap.css', array(), rand(), 'all');
    wp_enqueue_style('main-style', __THEME_HOST.'/assets/css/style.css', array(), rand(), 'all');
    wp_enqueue_style('magnific-popup', __THEME_HOST.'/assets/css/magnific-popup.css', array(), rand(), 'all');
    wp_enqueue_style('owl.carousel1111', __THEME_HOST.'/assets/css/owl.carousel.css', array(), rand(), 'all');
    wp_enqueue_style('default-style', __THEME_HOST.'/style.css', array(), rand(), 'all');

}

add_action( 'wp_enqueue_scripts', 'pveser_theme_styles' );

function pveser_theme_scripts()
{

    wp_enqueue_script('jQuery_v3.1.1.min.js', __THEME_HOST . '/assets/js/jQuery_v3.1.1.min.js', false, rand(), true);
    wp_enqueue_script('owl.carousel.min.js', __THEME_HOST . '/assets/js/owl.carousel.min.js', false, rand(), true);
    wp_enqueue_script('bootstrap.min.js', __THEME_HOST . '/assets/js/bootstrap.min.js', false, rand(), true);
    wp_enqueue_script('jquery.magnific-popup.js', __THEME_HOST . '/assets/js/jquery.magnific-popup.js', false, rand(), true);
    wp_enqueue_script('jquery.firstVisitPopup.js', __THEME_HOST . '/assets/js/jquery.firstVisitPopup.js', false, rand(), true);
    // wp_enqueue_script('slick', __THEME_HOST . '/assets/js/slick.min.js', false, rand(), true);
    wp_enqueue_script('custom', __THEME_HOST . '/assets/js/custom.js?ver='.rand(), false, rand(), true);

}

add_action( 'wp_enqueue_scripts', 'pveser_theme_scripts' );
?>