<div id="cart-dropdown" class="cart-menu collapse">
  <ul>
    <li>
      <table class="table table-striped">
        <tbody>
          <?php do_action( 'woocommerce_before_cart_contents' ); ?>

          <?php
          foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
            $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
            $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

            if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
              $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
              ?>
              <tr class="text-center woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

                <td class="product-thumbnail text-center">
                  <?php
                  $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

                  if ( ! $product_permalink ) {
              echo $thumbnail; // PHPCS: XSS ok.
            } else {
              printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
            }
            ?>
          </td>

          <td class="product-name text-left" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
            <div>
              <?php
              if ( ! $product_permalink ) {
                echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
              } else {
                echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
              }

              do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

            // Meta data.
            echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

            // Backorder notification.
            if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
              echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
            }
            ?>
          </div>
          <div class="text-left price">
            <?php
                echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                ?>
              </div>

              <div>
                Số lượng: <b><?= $cart_item['quantity'] ?></b>
              </div>
            </td>
              <!-- <td class="product-subtotal" data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
                <?php
                //echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                ?>
              </td> -->
            </tr>
            <?php
          }
        }
        ?>

        <?php do_action( 'woocommerce_cart_contents' ); ?>
        <?php do_action( 'woocommerce_after_cart_contents' ); ?>
      </tbody>
    </table>
  </li>
  <li>
    <table class="table">
      <tbody>

        <tr>
          <td class="text-right"><strong>Tạm tính</strong></td>
          <td class="text-right">
            <label>
              <?php wc_cart_totals_subtotal_html(); ?>
            </label>
          </td>
        </tr>
      </tbody>
    </table>
  </li>
  <li>
    <div style="display: flex;">
      <div class="col-xs-6">
        <a class="btn" href="<?= wc_get_cart_url() ?>">Giỏ hàng</a>
      </div>
      <div class="col-xs-6 btn_cart">
        <a class="btn" href="<?= wc_get_checkout_url() ?>">Thanh toán</a>
      </div>
    </div>
  </li>
</ul>
</div>