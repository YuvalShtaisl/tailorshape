<?php
	$color_scheme = ARTEMIS_SWP_get_default_color_scheme();
	$woo_position_class = "";

	$sidebar_id = "sidebar";
	$sidebar_name = "main-sidebar";

	/*make sure we are on one of the WooCommerce pages that gets sidebar*/
	if (ARTEMIS_SWP_need_sidebar_on_woo()) {
		if (is_shop() || 
			is_product_category() || 
			is_product_tag()) {
			$woo_position_class .= " shop_sidebar sidebar_".ARTEMIS_SWP_get_shop_page_sidebar();
		} else {
			/*single product page*/
			$woo_position_class .= " shop_sidebar sidebar_".ARTEMIS_SWP_get_theme_option('artemis_theme_shop_options', 'lc_shop_sidebar_single');
		}

		/*decide what sidebar to show on Woo pages*/
		if (ARTEMIS_SWP_change_shop_page_sidebar()) {
			$sidebar_id = "lc_woo_sidebar";
			$sidebar_name = "lc_woo_sidebar";			
		}
	}
?>


<div id="<?php echo esc_attr($sidebar_id); ?>" class="lc_basic_content_padding <?php echo esc_attr($color_scheme).esc_attr($woo_position_class); ?>">
	<ul>
		<?php
		 if (!function_exists('dynamic_sidebar') || !dynamic_sidebar($sidebar_name)) {
		 }
		?>
	</ul>
</div>