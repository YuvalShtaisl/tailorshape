<?php
/**
 * Product quantity inputs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/quantity-input.php.
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

defined( 'ABSPATH' ) || exit;

global $product;

/*swp [[[*/
$swp_class = '';
if ( $product && $product->is_sold_individually() ) {
    $swp_class .= 'at_swp_hidden';
}
/*swp ]]]*/

if ( $max_value && $min_value === $max_value ) {
    ?>
    <div class="quantity hidden at_swp_hidden">
        <input type="hidden" id="<?php echo esc_attr( $input_id );?>" class="qty" name="<?php echo esc_attr( $input_name ); ?>" value="<?php echo esc_attr( $min_value ); ?>"/>
    </div>
<?php 
} else { 
  /* translators: %s: Quantity. */
    $labelledby = ! empty( $args['product_name'] ) ? sprintf( __( '%s quantity', 'woocommerce' ), strip_tags( $args['product_name'] ) ) : '';
    ?>
    <div class="quantity noselect <?php echo esc_attr( $swp_class ) ?>">
        <span class="decrement_qty">-</span>
        <input type="text"
               id="<?php echo esc_attr( $input_id ); ?>"
               class="input-text qty text"
               step="<?php echo esc_attr( $step ); ?>"
               min="<?php echo esc_attr( $min_value ); ?>"
               max="<?php echo esc_attr( 0 < $max_value ? $max_value : '' ); ?>"
               name="<?php echo esc_attr( $input_name ); ?>"
               value="<?php echo esc_attr( $input_value ); ?>"
               title="<?php echo esc_attr_x( 'Qty', 'Product quantity input tooltip', 'artemis-swp' ) ?>"
               size="4"
               pattern="<?php echo esc_attr( $pattern ); ?>" inputmode="<?php echo esc_attr( $inputmode ); ?>"
        />
        <span class="increment_qty">+</span>
    </div>
<?php } ?>
