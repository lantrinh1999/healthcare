<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

global $product;
// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<li class="item product-layout-left mb_20">
	<div class="product-list col-xs-4">
		<div class="product-thumb">
			<div class="image product-imageblock"> 
				<a title="<?php the_title() ?>" href="<?php the_permalink() ?>">
					<?php woocommerce_template_loop_product_thumbnail() ?>
				</a>
			</div>
		</div>
	</div>

	<div class="col-xs-8">
		<div class="caption product-detail">
			<h6 class="product-name">
				<a title="<?php the_title() ?>" href="<?php the_permalink() ?>"><?php the_title() ?></a>
			</h6>
			<div class="mb_5 rating">
				<?php wc_get_template( 'loop/rating.php' ); ?>
			</div>
			<div class="mb_5">
				<?php wc_get_template( 'loop/price.php' ); ?>
			</div>
		</div>
	</div>
</li>

