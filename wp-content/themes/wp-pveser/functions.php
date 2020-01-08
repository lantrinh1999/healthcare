<?php
require_once 'pveser-framework/init.php';
// thiết lập chung
function dd($data){
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
	exit;
}

function excerpt_words($str , $number = 100)
{
    $excerpt = $str;
    $excerpt = preg_replace(" (\[.*?\])", '', $excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $number);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace('/\s+/', ' ', $excerpt));
    return $excerpt . "...";
}

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' => 'Theme General Settings',
		'menu_title' => 'Theme Settings',
		'menu_slug' => 'theme-general-settings',
		'capability' => 'edit_posts',
		'redirect' => true
	));

	acf_add_options_sub_page(array(
		'page_title' => 'Theme General Settings',
		'menu_title' => 'Thiết Lập Chung',
		'parent_slug' => 'theme-general-settings',
	));

	// acf_add_options_sub_page(array(
	// 'page_title' => 'Theme Home Settings',
	// 'menu_title' => 'Thiết Lập Trang Chủ',
	// 'parent_slug' => 'theme-general-settings',
	// ));

	acf_add_options_sub_page(array(
		'page_title' => 'Theme Header Settings',
		'menu_title' => 'Thiết Lập Đầu Trang',
		'parent_slug' => 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' => 'Theme Footer Settings',
		'menu_title' => 'Thiết Lập Chân Trang',
		'parent_slug' => 'theme-general-settings',
	));

}

?>