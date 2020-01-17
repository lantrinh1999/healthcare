<?php
add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails');
flush_rewrite_rules();
show_admin_bar(__return_false());

add_filter('use_block_editor_for_post_type', 'd4p_32752_completly_disable_block_editor');
function d4p_32752_completly_disable_block_editor($use_block_editor)
{
    return false;
}

function get_dynamic_sidebar($index = 1)
{
    $sidebar_contents = "";
    ob_start();
    dynamic_sidebar($index);
    $sidebar_contents = ob_get_clean();
    return $sidebar_contents;
}

function pveser_excerpt($number = 100)
{

    $excerpt = get_the_content();
    if(strlen($excerpt)) {
        return $excerpt;
    }
    $excerpt = preg_replace(" (\[.*?\])", '', $excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $number);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace('/\s+/', ' ', $excerpt));
    return $excerpt . "...";
}

function pveser_title($number = 50)
{
    $excerpt = get_the_title();
    $excerpt = preg_replace(" (\[.*?\])", '', $excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $number);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace('/\s+/', ' ', $excerpt));
    return $excerpt . "...";
}

function pveser_thumbnail($size, $atts = array())
{
    $default = __THEME_HOST . "/pveser-framework/assets/images/no-photo.png";
    if (has_post_thumbnail()) {
        the_post_thumbnail($size, $atts);
    } else {
        echo '<img src="' . $default . '" alt="' . get_the_title() . '"/>';
    }

}

function pveser_comment_facebook($number)
{
    ?>
    <div class="fb-comments" data-width="100%" data-href="<?php the_permalink();?>" data-numposts="<?php echo $number; ?>"></div>
    <?php
}

function pveser_related_post($number, $title)
{
    global $post;
    $orig_post = $post;
    $categories = get_the_category($post->ID);
    if ($categories) {
        $category_ids = array();
        foreach ($categories as $individual_category) {
            $category_ids[] = $individual_category->term_id;
        }

        $args = array(
            'category__in' => $category_ids,
            'post__not_in' => array($post->ID),
            'posts_per_page' => $number, // Number of related posts that will be shown.
            'ignore_sticky_posts' => 1,
            'orderby' => 'date',
        );
        $related_query = new wp_query($args);
        if ($related_query->have_posts()) {
            $count = 0;
            ?>
            <div class="related-posts">
                <h4 style="margin-bottom: 20px;" class="underline-title text-uppercase"><?php echo $title; ?></h4>
                <div class="wrap-related-post row">
                    <?php

                    while ($related_query->have_posts()) {
                        $count++;
                        $related_query->the_post();
                        ?>
                        <div class="wrap-item-news col-md-6">
                            <div class="media custom-media">
                                <div class="media-left">
                                    <a href="<?php the_permalink();?>" title="<?php the_title();?>">
                                        <?php pveser_thumbnail('thumbnail', array('class' => 'media-object', 'width' => '128', 'height' => '180'))?>
                                    </a>
                                </div> <!-- END /. media-left -->
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h3>
                                </div> <!-- END /. media-body -->
                            </div>
                        </div> <!-- END /. wrap-item-news -->
                        <?php
                        echo ($count % 2 == 0) ? '<div class="clearfix"></div>' : false;
                    }
                    ?>
                </div><!--End .row-->
            </div><!--End .related_post-->
            <?php

        }
    }
    $post = $orig_post;
    wp_reset_query();
}

function pveser_wp_is_mobile()
{
    static $is_mobile;

    if (isset($is_mobile)) {
        return $is_mobile;
    }

    if (empty($_SERVER['HTTP_USER_AGENT'])) {
        $is_mobile = false;
    } elseif (
        strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false) {
        $is_mobile = true;
    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false && strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') == false) {
        $is_mobile = true;
    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') !== false) {
        $is_mobile = false;
    } else {
        $is_mobile = false;
    }

    return $is_mobile;
}

function custom_login_logo()
{
    ?>
    <link href="<?php echo get_template_directory_uri(); ?>/pveser-framework/assets/css/login.css" rel="stylesheet" type="text/css"/>
    <?php
}

add_action('login_head', 'custom_login_logo');

function SearchFilter($query)
{
    if ($query->is_search) {
        $query->set('post_type', array('post', 'faqs'));
        ///$query->set('post_type', 'faqs');
    }
    return $query;
}
add_filter('pre_get_posts', 'SearchFilter');

function get_youtube_id($url)
{
    parse_str(parse_url($url, PHP_URL_QUERY), $my_array_of_vars);
    return $my_array_of_vars['v'];
}

function modify_jquery()
{
    if (!is_admin()) {
        // comment out the next two lines to load the local copy of jQuery
        wp_deregister_script('jquery');
        wp_register_script('jquery', __THEME_HOST . '/assets/js/jquery-1.9.1.js', false, '');
        wp_enqueue_script('jquery');
    }
}
// add_action('init', 'modify_jquery');

add_filter('body_class', "custom_body_class");

function custom_body_class($classes)
{

    if (!in_array("woocommerce", $classes) && !empty($classes)) {
        return array_merge($classes, array('woocommerce'));
    }

    return $classes;

}

//add_action('wp_ajax_nopriv_dhemy_ajax_search','dhemy_ajax_search');
//add_action('wp_ajax_dhemy_ajax_search','dhemy_ajax_search');

function dhemy_ajax_search()
{

// your taxonomy name
    $tax = 'product_tag';

// get the terms of taxonomy
    $terms = get_terms($tax, array('hide_empty' => false, 'search' => $_POST['term'], 'number' => 10)
        // do not hide empty terms
);

    if (count($terms) > 0) {
        foreach ($terms as $term) {
            echo '<li><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
        }
    } else {
        echo '<li>Không tìm thấy kết quả</li>';
    }

    exit;
}

function rel_next_prev()
{
    global $paged;

    if (get_previous_posts_link()) {?>
        <link rel="prev" href="<?php echo get_pagenum_link($paged - 1); ?>" /><?php
    }

    if (get_next_posts_link()) {?>
        <link rel="next" href="<?php echo get_pagenum_link($paged + 1); ?>" /><?php
    }

}
add_action('wp_head', 'rel_next_prev');

function _remove_script_version($src)
{
    $parts = explode('?ver', $src);
    return $parts[0];
}
add_filter('script_loader_src', '_remove_script_version', 15, 1);
add_filter('style_loader_src', '_remove_script_version', 15, 1);

function wp_html_compression_finish($html)
{
    return new WP_HTML_Compression($html);
}

function wp_html_compression_start()
{
    ob_start('wp_html_compression_finish');
}
// add_action('get_header', 'wp_html_compression_start');

function pveser_option($theme_options, $before = '', $after = '', $default = '')
{
    if (!empty($theme_options)) {
        $content = $before . $theme_options . $after;
    } else {
        $content = $default;
    }

    return $content;
}

function pveser_template_part($name)
{
    $path = __THEME_PATH . '/pveser-framework/templates/' . $name . '.php';

    require_once $path;
}

function pveser_menu_bootstrap($location, $level, $container_class = '', $container_id = '', $menu_class = 'nav navbar-nav', $menu_id = '')
{
    wp_nav_menu(array(
        'theme_location' => $location,
        'depth' => $level,
        'menu_class' => $menu_class,
        'menu_id' => $menu_id,
        'container_class' => $container_class,
        'container_id' => $container_id,
        'walker' => new wp_bootstrap_navwalker())
);
}

function pveser_breadcrumbs()
{

    // Settings
    $breadcrums_class = 'breadcrumb';
    $home_title = '';

    // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
    $custom_taxonomy = 'product_cat';

    // Get the query & post information
    global $post, $wp_query;

    // Do not display on the homepage
    if (!is_front_page()) {

        // Build the breadcrums
        echo '<ul class="' . $breadcrums_class . '">';

        // Home page
        echo '<li><a href="' . get_home_url() . '" title="' . $home_title . '"><span class="fa-stack"><i class="fa fa-square text-muted fa-stack-2x"></i><i class="fa fa-home fa-stack-1x text-white"></i></span> ' . $home_title . '</a></li>';

        if (is_archive() && !is_tax() && !is_category() && !is_tag()) {

            echo '<li class="active"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';

        } else if (is_archive() && is_tax() && !is_category() && !is_tag()) {

            // If post is a custom post type
            $post_type = get_post_type();

            // If it is a custom post type display name and link
            if ($post_type != 'post') {

                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);

                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';

            }

            $custom_tax_name = get_queried_object()->name;
            echo '<li class="active">' . $custom_tax_name . '</li>';

        } else if (is_single()) {

            // If post is a custom post type
            $post_type = get_post_type();

            // If it is a custom post type display name and link
            if ($post_type != 'post') {

                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);

                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';

            }

            // Get post category info
            $category = get_the_category();

            if (!empty($category)) {

                // Get last category post is in
                $last_category = end(array_values($category));

                // Get parent any categories and create array
                $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','), ',');
                $cat_parents = explode(',', $get_cat_parents);

                // Loop through parent categories and store in variable $cat_display
                $cat_display = '';
                foreach ($cat_parents as $parents) {
                    $cat_display .= '<li class="item-cat">' . $parents . '</li>';
                }

            }

            // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
            if (empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {

                $taxonomy_terms = get_the_terms($post->ID, $custom_taxonomy);
                $cat_id = $taxonomy_terms[0]->term_id;
                $cat_nicename = $taxonomy_terms[0]->slug;
                $cat_link = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                $cat_name = $taxonomy_terms[0]->name;

            }

            // Check if the post is in a category
            if (!empty($last_category)) {
                echo $cat_display;
                echo '<li class="item-current item-' . $post->ID . '">' . get_the_title() . '</li>';

                // Else if post is in a custom taxonomy
            } else if (!empty($cat_id)) {

                echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
                echo '<li class="item-current item-' . $post->ID . '">' . get_the_title() . '</li>';

            } else {

                echo '<li class="item-current item-' . $post->ID . '">' . get_the_title() . '</li>';

            }

        } else if (is_category()) {

            // Category page
            echo '<li class="item-current item-cat">' . single_cat_title('', false) . '</li>';

        } else if (is_page()) {

            // Standard page
            if ($post->post_parent) {

                // If child page, get parents
                $anc = get_post_ancestors($post->ID);

                // Get parents in the right order
                $anc = array_reverse($anc);

                // Parent page loop
                if (!isset($parents)) {
                    $parents = null;
                }

                foreach ($anc as $ancestor) {
                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                }

                // Display parent pages
                echo $parents;

                // Current page
                echo '<li class="item-current item-' . $post->ID . '">' . get_the_title() . '</li>';

            } else {

                // Just display current page if not parents
                echo '<li class="item-current item-' . $post->ID . '">' . get_the_title() . '</li>';

            }

        } else if (is_tag()) {

            // Tag page

            // Get tag information
            $term_id = get_query_var('tag_id');
            $taxonomy = 'post_tag';
            $args = 'include=' . $term_id;
            $terms = get_terms($taxonomy, $args);
            $get_term_id = $terms[0]->term_id;
            $get_term_slug = $terms[0]->slug;
            $get_term_name = $terms[0]->name;

            // Display the tag name
            echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '">' . $get_term_name . '</li>';

        } elseif (is_day()) {

            // Day archive

            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link(get_the_time('Y')) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';

            // Month link
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';

            // Day display
            echo '<li class="item-current item-' . get_the_time('j') . '">' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</li>';

        } else if (is_month()) {

            // Month Archive

            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link(get_the_time('Y')) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';

            // Month display
            echo '<li class="item-month item-month-' . get_the_time('m') . '">' . get_the_time('M') . ' Archives</li>';

        } else if (is_year()) {

            // Display year archive
            echo '<li class="item-current item-current-' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</li>';

        } else if (is_author()) {

            // Auhor archive

            // Get the author information
            global $author;
            $userdata = get_userdata($author);

            // Display author name
            echo '<li class="item-current item-current-' . $userdata->user_nicename . '">' . 'Author: ' . $userdata->display_name . '</li>';

        } else if (get_query_var('paged')) {

            // Paginated archives
            echo '<li class="item-current item-current-' . get_query_var('paged') . '">' . __('Page') . ' ' . get_query_var('paged') . '</li>';

        } else if (is_search()) {

            // Search results page
            echo '<li class="item-current item-current-' . get_search_query() . '">Search results for: ' . get_search_query() . '</li>';

        } elseif (is_404()) {

            // 404 page
            echo '<li>' . 'Error 404' . '</li>';
        }

        echo '</ul>';

    }

}

function getDuration($videoID)
{

    $arrContextOptions = array(
        "ssl" => array(
            "verify_peer" => false,
            "verify_peer_name" => false,
        ),
    );

    $apikey = "AIzaSyCNNrA_abLroIglF1586TYRP5GoO_Jd6DY";
    $dur = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=contentDetails&id=$videoID&key=$apikey", false, stream_context_create($arrContextOptions));
    $VidDuration = json_decode($dur, true);
    foreach ($VidDuration['items'] as $vidTime) {
        $VidDuration = $vidTime['contentDetails']['duration'];
    }
    preg_match_all('/(\d+)/', $VidDuration, $parts);
    return $parts[0][0] . ":" . $parts[0][1] . ":" . $parts[0][2]; // Return 1:11:46 (i.e) HH:MM:SS
}

function pveser_install_widgets($name = array())
{
    if (!empty($name) && count($name) > 0) {
        foreach ($name as $filename) {
            require_once __THEME_PATH . '/pveser-framework/includes/widgets/' . $filename . '.php';
        }
    }
}

// =================== LOGIN ============================//

// Redirect khi đăng nhập
function my_login_redirect($redirect_to, $request, $user)
{
    //is there a user to check?
    global $user;
    if (isset($user->roles) && is_array($user->roles)) {
        //check for admins
        if (in_array('administrator', $user->roles)) {
            // redirect them to the default place
            return home_url();
        } else {
            return home_url();
        }
    } else {
        return $redirect_to;
    }
}
//add_filter( 'login_redirect', 'my_login_redirect', 10, 3 );
function redirect_login_page()
{
    $login_page = get_page_link(241);
    $page_viewed = basename($_SERVER['REQUEST_URI']);
    if ($page_viewed == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {
        wp_redirect($login_page);
        exit;
    }
}
//add_action('init','redirect_login_page');
// Kết thúc Redirect khi đăng nhập

// Kiểm tra lỗi đăng nhập
function login_failed()
{
    $login_page = get_page_link(241);
    wp_redirect($login_page . '?login=failed');
    exit;
}
//add_action( 'wp_login_failed', 'login_failed' );
function verify_username_password($user, $username, $password)
{
    $login_page = get_page_link(241);
    if ($username == "" || $password == "") {
        wp_redirect($login_page . "?login=empty");
        exit;
    }
}
//add_filter( 'authenticate', 'verify_username_password', 1, 3);

//============== xoa bai ================//
/*
add_action( 'wp_ajax_delete_post', 'delete_post_fuction');
add_action( 'wp_ajax_nopriv_delete_post', 'delete_post_fuction');

function delete_post_fuction(){
$post_idd = $_POST['value'];
wp_delete_post( $post_idd, false);
die();
}

function insert_attachment($file_handler,$post_id,$setthumb='false') {
// check to make sure its a successful upload
if ($_FILES[$file_handler]['error'] !== UPLOAD_ERR_OK) __return_false();
require_once(ABSPATH . "wp-admin" . '/includes/image.php');
require_once(ABSPATH . "wp-admin" . '/includes/file.php');
require_once(ABSPATH . "wp-admin" . '/includes/media.php');
$attach_id = media_handle_upload( $file_handler, $post_id );

if ($setthumb) update_post_meta($post_id,'_thumbnail_id',$attach_id);
return $attach_id;
}

function create_shortcode_post_featured($args, $content)
{
ob_start();
$query = new WP_Query(
array('post_type' => 'post', 'cat'=>$args['category'], 'order'=>'DESC', 'orderby'=>'date', 'meta_key'=>'featured_post', 'meta_value'=>true, 'posts_per_page'=>$args['limit'])
);
if ($query->have_posts())
{
echo '<ul>';
while ($query->have_posts())
{
$query->the_post();
?>
<li><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 10, '...' ); ?></a></li>
<?php
}
echo '</ul>';
}
$result = ob_get_contents();
ob_end_clean();
return $result;
}
add_shortcode('post_featured', 'create_shortcode_post_featured');

//Hàm đếm lượt truy cập khi khách vào xem bài viết
function ah_setPostViews($postID) {
$count_key = 'post_views_count';
$count = get_post_meta($postID, $count_key, true);
if($count==''){
$count = 0;
delete_post_meta($postID, $count_key);
add_post_meta($postID, $count_key, '0');
}else{
$count++;
update_post_meta($postID, $count_key, $count);
}
}

function create_shortcode_post_views($args, $content)
{
ob_start();
$query = new WP_Query(
array('post_type' => 'post', 'cat'=>$args['category'], 'order'=>'DESC', 'orderby'=>'meta_value_num', 'meta_key'=>'post_views_count', 'posts_per_page'=>$args['limit'])
);
if ($query->have_posts())
{
echo '<ul>';
while ($query->have_posts())
{
$query->the_post();
?>
<li><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 10, '...' ); ?></a></li>
<?php
}
echo '</ul>';
}
$result = ob_get_contents();
ob_end_clean();
return $result;
}
add_shortcode('post_views', 'create_shortcode_post_views');

add_action( 'wp_ajax_check_pass', 'check_pass_fuction');
add_action( 'wp_ajax_nopriv_check_pass', 'check_pass_fuction');

function check_pass_fuction(){

if(isset($_POST['value'])&&!empty($_POST['value'])){
if(wp_check_password( $_POST['value'], $_POST['user_hash'], $_POST['idd'])){
echo "true";
}
else echo "false";
}
die();

}

/*Contributor add media*/
//Allow Contributors to Add Media
/*
if ( current_user_can('contributor') && !current_user_can('upload_files') )
add_action('admin_init', 'allow_contributor_uploads');
function allow_contributor_uploads() {
$contributor = get_role('contributor');
$contributor->add_cap('upload_files');
}
 */

/**
 * CUSTOM WOOCOMMERCE
 * 
 */


remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
add_action('woocommerce_before_main_content', 'custom_woocommerce_breadcrumb', 20);

function custom_woocommerce_breadcrumb($args = array())
{
    if (is_product()) {
        $t = get_the_title();
    } else {
        $t = woocommerce_page_title(false);
    }
    if ( apply_filters( 'woocommerce_show_page_title', true ) ){
        $title = '<h1 class="woocommerce-products-header__title page-title">'.$t.'</h1>';
    }else {
        $title = '';
    }
    
    $args = wp_parse_args(
        $args,
        apply_filters(
            'woocommerce_breadcrumb_defaults',
            array(
                'delimiter' => '',
                'wrap_before' => '<div class="breadcrumb ptb_20">' . $title,
                'wrap_after' => '</div>',
                'before' => '',
                'after' => '',
                'home' => _x('Home', 'breadcrumb', 'woocommerce'),
            )
        )
    );

    $breadcrumbs = new WC_Breadcrumb();

    if (!empty($args['home'])) {
        $breadcrumbs->add_crumb($args['home'], apply_filters('woocommerce_breadcrumb_home_url', home_url()));
    }

    $args['breadcrumb'] = $breadcrumbs->generate();
    do_action('woocommerce_breadcrumb', $breadcrumbs, $args);

    wc_get_template('global/breadcrumb.php', $args);
}

remove_action('woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10);
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);

// custom ordering





remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);

add_action('woocommerce_before_main_content', 'custom_template_before_main_content', 5);
function custom_template_before_main_content()
{
    get_sidebar('category');
    echo '<div class="col-sm-8 col-md-8 col-lg-9 mtb_30">';
}
add_action('woocommerce_after_main_content', 'custom_template_after_main_content', 5);
function custom_template_after_main_content()
{
    echo '</div></div></div>';
}

//link
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );


// custom image product archive-product
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
add_action( 'woocommerce_before_shop_loop_item_title', 'custom_woocommerce_template_loop_product_thumbnail', 10 );
function custom_woocommerce_template_loop_product_thumbnail()
{
    global $product;
    echo '<div class="image product-imageblock">';
    echo '<a href="'.get_the_permalink().'" title="'.get_the_title().'">';
    wc_get_template('loop/sale-flash.php');
    echo '<img data-name="product_image" src="'.get_the_post_thumbnail_url().'" alt="'.get_the_title().'" title="'.get_the_title().'" class="img-responsive">';
    echo '<img data-name="product_image" src="'.get_the_post_thumbnail_url().'" alt="'.get_the_title().'" title="'.get_the_title().'" class="img-responsive">';
    echo '</a>';
    echo '</div>';
}


// title product archive-product
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
add_action( 'woocommerce_shop_loop_item_title', 'custom_woocommerce_template_loop_product_title', 10 );
function custom_woocommerce_template_loop_product_title()
{
    echo '
    <div class="caption product-detail text-left">
    <h6 data-name="product_name" class="product-name mt_20">
    <a href="'.get_the_permalink().'" title="'.get_the_title().'">'. get_the_title().'</a>
    </h6>
    <div class="rating">
    ';
    wc_get_template( 'loop/rating.php' );
    echo '
    </div>
    <span class="price">
    <span class="amount">';
    wc_get_template( 'loop/price.php' );
    echo '</span>
    </span>
    <p class="product-desc mt_20 mb_60">
    ' . pveser_excerpt() . '
    </p>
    <div class="button-group text-center">
    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
    <div class="compare"><a href="#"><span>Compare</span></a></div>
    <div class="add-to-cart">
    ';
    echo wc_get_template( 'loop/add-to-cart.php' , custom_woocommerce_args_loop_add_to_cart() );
    echo '
    </a></div>
    </div>
    </div>';


    // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}

//sale 
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
// remove default title
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
// add_action( 'woocommerce_after_shop_loop_item', 'custom_woocommerce_template_loop_add_to_cart', 10 );
function custom_woocommerce_args_loop_add_to_cart($args = array())
{
    global $product;

    if ($product) {
        $defaults = array(
            'quantity' => 1,
            'class' => implode(
                ' ',
                array_filter(
                    array(
                        'button',
                        'product_type_' . $product->get_type(),
                        $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
                        $product->supports('ajax_add_to_cart') && $product->is_purchasable() && $product->is_in_stock() ? 'ajax_add_to_cart' : '',
                    )
                )
            ),
            'attributes' => array(
                'data-product_id' => $product->get_id(),
                'data-product_sku' => $product->get_sku(),
                'aria-label' => $product->add_to_cart_description(),
                'rel' => 'nofollow',
            ),
        );

        $args = apply_filters('woocommerce_loop_add_to_cart_args', wp_parse_args($args, $defaults), $product);

        if (isset($args['attributes']['aria-label'])) {
            $args['attributes']['aria-label'] = wp_strip_all_tags($args['attributes']['aria-label']);
        }
        return $args;
    }
}


//ordering
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);


add_action( 'woocommerce_before_shop_loop', 'custom_category_page_wrapper', 30 );

function custom_category_page_wrapper()
{
    echo '
    <div class="category-page-wrapper mb_30">
    <div class="col-xs-6 sort-wrapper">
    <label class="control-label" for="input-sort">Sắp xếp :</label>
    <div class="sort-inner">';
    wc_get_template( 'loop/orderby.php' , woocommerce_catalog_ordering() );
    echo '
    </div>
    <span><i class="fa fa-angle-down" aria-hidden="true"></i></span> 
    </div>    
    <div class="col-xs-6 text-right list-grid-wrapper">
    <div class="btn-group btn-list-grid">
    <button type="button" id="list-view" class="btn btn-default list-view"></button>
    <button type="button" id="grid-view" class="btn btn-default grid-view active"></button>
    </div>
    </div>
    </div>';
}

function woocommerce_catalog_ordering()
{
    if (!wc_get_loop_prop('is_paginated') || !woocommerce_products_will_display()) {
        return;
    }
    $show_default_orderby = 'menu_order' === apply_filters('woocommerce_default_catalog_orderby', get_option('woocommerce_default_catalog_orderby', 'menu_order'));
    $catalog_orderby_options = apply_filters(
        'woocommerce_catalog_orderby',
        array(
            'menu_order' => __('Default sorting', 'woocommerce'),
            'popularity' => __('Sort by popularity', 'woocommerce'),
            'rating' => __('Sort by average rating', 'woocommerce'),
            'date' => __('Sort by latest', 'woocommerce'),
            'price' => __('Sort by price: low to high', 'woocommerce'),
            'price-desc' => __('Sort by price: high to low', 'woocommerce'),
        )
    );

    $default_orderby = wc_get_loop_prop('is_search') ? 'relevance' : apply_filters('woocommerce_default_catalog_orderby', get_option('woocommerce_default_catalog_orderby', ''));
    $orderby = isset($_GET['orderby']) ? wc_clean(wp_unslash($_GET['orderby'])) : $default_orderby;
         // WPCS: sanitization ok, input var ok, CSRF ok.

    if (wc_get_loop_prop('is_search')) {
        $catalog_orderby_options = array_merge(array('relevance' => __('Relevance', 'woocommerce')), $catalog_orderby_options);

        unset($catalog_orderby_options['menu_order']);
    }

    if (!$show_default_orderby) {
        unset($catalog_orderby_options['menu_order']);
    }

    if (!wc_review_ratings_enabled()) {
        unset($catalog_orderby_options['rating']);
    }

    if (!array_key_exists($orderby, $catalog_orderby_options)) {
        $orderby = current(array_keys($catalog_orderby_options));
    }

    $data = array(
        'catalog_orderby_options' => $catalog_orderby_options,
        'orderby' => $orderby,
        'show_default_orderby' => $show_default_orderby,
    );
    return $data;

// wc_get_template(
//     'loop/orderby.php',
//     array(
//         'catalog_orderby_options' => $catalog_orderby_options,
//         'orderby' => $orderby,
//         'show_default_orderby' => $show_default_orderby,
//     )
// );
}

function custom_woocommerce_result_count()
{
    if (!wc_get_loop_prop('is_paginated') || !woocommerce_products_will_display()) {
        return;
    }
    $args = array(
        'total' => wc_get_loop_prop('total'),
        'per_page' => wc_get_loop_prop('per_page'),
        'current' => wc_get_loop_prop('current_page'),
    );

    wc_get_template('loop/result-count.php', $args);
}

remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
remove_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description', 10 );



// single product 


// remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
// add_action( 'woocommerce_before_single_product_summary', 'custom_woocommerce_show_product_images', 20 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
add_action( 'woocommerce_after_single_product_summary', 'custom_woocommerce_output_related_products', 20 );
function custom_woocommerce_output_related_products()
{

    $args = array(
        'posts_per_page' => 8,
        'columns' => 4,
            'orderby' => 'rand', // @codingStandardsIgnoreLine.
        );

    woocommerce_related_products(apply_filters('woocommerce_output_related_products_args', $args));
}

function custom_wc_get_rating_html($rating, $count = 0)
{
    $html = '';

    if (0 < $rating) {
        $html = '';
        $star = '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>';
        $star_o = '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>';
        if ($rating > 0 && $rating <= 5) {
            $html .= str_repeat($star, $rating);
            $html .= str_repeat($star_o, 5 - $rating);
            $html = '<div class="stars_rating">'.$html.'</div>';
        }
    }

    return apply_filters('woocommerce_product_get_rating_html', $html, $rating, $count);
}

remove_action( 'woocommerce_review_before', 'woocommerce_review_display_gravatar', 10 );
add_action( 'woocommerce_review_before', 'custom_woocommerce_review_display_gravatar', 10 );
function custom_woocommerce_review_display_gravatar($comment)
{
    echo '<div class="col-xs-1">';
    echo get_avatar($comment, apply_filters('woocommerce_review_gravatar_size', '100'), '');
    echo '</div>';
}



remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );

/**
 * END CUSTOM WOOCOMMERCE
 * 
 */
?>

