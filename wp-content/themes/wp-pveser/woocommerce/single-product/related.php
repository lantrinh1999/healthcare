<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>
	<div class="row">
		
		<section class="related products col-md-12">
			<div class="heading-part text-center">
				<h2 class="main_title mt_50"><?php esc_html_e( 'Related products', 'woocommerce' ); ?></h2>
			</div>
		</section>
	</div>


	<div class="row">
		<div class="product-layout  product-grid related-pro  owl-carousel mb_50">
			<?php woocommerce_product_loop_start(); ?>
			<?php foreach ( $related_products as $related_product ) : ?>

				<?php
				$post_object = get_post( $related_product->get_id() );

				setup_postdata( $GLOBALS['post'] =& $post_object );

				wc_get_template_part( 'content', 'product_related' ); ?>

			<?php endforeach; ?>
			<?php woocommerce_product_loop_end(); ?>
		</div>
	</div>



<?php endif;

wp_reset_postdata();
