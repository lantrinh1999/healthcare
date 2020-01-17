<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $product_tabs ) ) : ?>
	<div class="row">
		<div class="woocommerce-tabs wc-tabs-wrapper col-sm-12 col-linh">
			<div id="exTab5" class="mtb_30">
				<ul class="tabs wc-tabs nav nav-tabs" role="tablist">
					<?php $count_tab = 0 ?>
					<?php foreach ( $product_tabs as $key => $product_tab ) : ?>
						<?php $count_tab++; ?>
						<li class="<?php $count_tab == 1 ? 'active ' : ' ' ?> <?php echo esc_attr( $key ); ?>_tab " id="tab-title-<?php echo esc_attr( $key ); ?>"> 
							<a href="#tab-<?php echo esc_attr( $key ); ?>" data-toggle="tab">
								<?php echo wp_kses_post( apply_filters( 'woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key ) ); ?>
							</a> 
						</li>
					<?php endforeach; ?>
				</ul>
				<div class="tab-content mt_20">
					<?php foreach ( $product_tabs as $key => $product_tab ) : ?>
						<div class="tab-pane active woocommerce-Tabs-panel woocommerce-Tabs-panel--<?php echo esc_attr( $key ); ?> entry-content wc-tab" id="tab-<?php echo esc_attr( $key ); ?>" role="tabpanel" aria-labelledby="tab-title-<?php echo esc_attr( $key ); ?>">
							<?php
							if ( isset( $product_tab['callback'] ) ) {
								call_user_func( $product_tab['callback'], $key, $product_tab );
							}
							?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>

	<?php do_action( 'woocommerce_product_after_tabs' ); ?>

<?php endif; ?>
