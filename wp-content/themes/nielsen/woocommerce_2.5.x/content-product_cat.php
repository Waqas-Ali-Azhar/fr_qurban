<?php
/**
 * The template for displaying product category thumbnails within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product_cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see     http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $woocommerce_loop;

// Store loop count we're currently on.
if ( empty( $woocommerce_loop['loop'] ) ) {
	$woocommerce_loop['loop'] = 0;
}

// Store column count for displaying the grid.
if ( empty( $woocommerce_loop['columns'] ) ) {
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );
}

// Increase loop count.
$woocommerce_loop['loop']++;

$li_class = array();

//standard li class
$li_class[] = 'product-category product';

$sidebar = yit_get_sidebars();
if ( $sidebar['layout'] == 'sidebar-double' ) {
    $li_class[] = 'col-sm-4 col-xs-4';
    $woocommerce_loop['columns']    = '3';
}
elseif ( $sidebar['layout'] == 'sidebar-right' || $sidebar['layout'] == 'sidebar-left' ) {
    $li_class[] = 'col-sm-3 col-xs-4';
    $woocommerce_loop['columns']    = '4';
}
else {
    $li_class[] = 'col-sm-2 col-xs-4';
    $woocommerce_loop['columns']    = '6';
}

//Set columns and class mobile phone
$row_mobile_value = yit_get_option( 'shop-products-per-row-mobile' );
$row_mobile = intval( ! empty( $row_mobile_value ) ? $row_mobile_value : 2 );

// check if is mobile
$isMobile = YIT_Mobile()->isMobile();
$isPhone = $isMobile && ! YIT_Mobile()->isTablet();

if( $isPhone ) {
    $li_class[]   = 'col-xxs-' . intval( 12 / $row_mobile );
    $woocommerce_loop['columns']      = $row_mobile;
}

// Increase loop count

$woocommerce_loop['shown_product'] = true;

?>

<li <?php wc_product_cat_class( $li_class , $category ) ?> >

    <?php do_action( 'woocommerce_before_subcategory', $category ); ?>

    <a href="<?php echo get_term_link( $category->slug, 'product_cat' ); ?>" class="product-category-link">

        <div class="category-thumb">
            <?php
            /**
             * woocommerce_before_subcategory_title hook
             *
             * @hooked woocommerce_subcategory_thumbnail - 10
             */
            do_action( 'woocommerce_before_subcategory_title', $category ); ?>

        </div>

        <?php

        /**
         * woocommerce_shop_loop_subcategory_title hook.
         *
         * @hooked woocommerce_template_loop_category_title - 10
         */
        do_action( 'woocommerce_shop_loop_subcategory_title', $category );
        ?>

        <?php
        /**
         * woocommerce_after_subcategory_title hook
         */
        do_action( 'woocommerce_after_subcategory_title', $category , isset( $show_counter ) ? $show_counter  : 0 );
        ?>

    </a>
    <?php do_action( 'woocommerce_after_subcategory', $category ); ?>
</li>