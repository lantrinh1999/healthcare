<?php
/**
 * Loop Rating
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/rating.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

if ( ! wc_review_ratings_enabled() ) {
	return;
}

$rate = round($product->get_average_rating(), 0, PHP_ROUND_HALF_DOWN);
$html = '';
$star = '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>';
$star_o = '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>';
if ($rate > 0 && $rate < 5) {
	$html .= str_repeat($star, $rate);
	$html .= str_repeat($star_o, 5 - $rate);
} elseif ($rate == 5) {
	$html = str_repeat($star, 5);
} elseif ($rate == 0) {
	$html = str_repeat($star_o, 5);
	// $html = '';
} else {
	$html = '';
}

echo $html;
?>