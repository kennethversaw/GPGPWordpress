<?php
/**
 * Order again button
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-again.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<br />
<div class="registration_event"><div class="woocommerce"><p class="order-again floatLeft">
	<a href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'order_again', $order->get_id() ) , 'woocommerce-order_again' ) ); ?>" class="btn add_to_cart_loop"><?php _e( 'Order again', 'woocommerce' ); ?></a>
</p></div></div>
<br />