<?php
/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( ! $product->is_purchasable() ) {
	return;
}

/*** Our code modification inside Woo template - begin ***/

$bridge_qode_options = bridge_qode_return_global_options();

$button_classes = 'single_add_to_cart_button qbutton button alt';
if (isset($bridge_qode_options['woo_products_add_to_cart_hover_type']) && $bridge_qode_options['woo_products_add_to_cart_hover_type'] !== ''){
	$button_classes .= ' '.$bridge_qode_options['woo_products_add_to_cart_hover_type'];
}

/*** Our code modification inside Woo template - end ***/

echo wc_get_stock_html( $product );

if ( $product->is_in_stock() ) : ?>
	
	<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

    <form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
		<?php
		/**
		 * @since 2.1.0.
		 */
		do_action( 'woocommerce_before_add_to_cart_button' );
		
		/**
		 * @since 3.0.0.
		 */
		do_action( 'woocommerce_before_add_to_cart_quantity' );

        woocommerce_quantity_input( array(
            'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
            'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
            'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
        ) );
		
		/**
		 * @since 3.0.0.
		 */
		do_action( 'woocommerce_after_add_to_cart_quantity' );
		?>
		
		<?php /*** Our code modification inside Woo template - begin ***/ ?>
		<button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt <?php echo esc_attr($button_classes); ?>"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
		<?php /*** Our code modification inside Woo template - end ***/ ?>
		
		<?php
		/**
		 * @since 2.1.0.
		 */
		do_action( 'woocommerce_after_add_to_cart_button' );
		?>
	</form>
	
	<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

<?php endif; ?>
