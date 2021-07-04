<?php
	$header_width = esc_attr(ARTEMIS_SWP_get_header_footer_width());
	/*create class: lc_swp_full/lc_swp_boxed*/
	$header_width = 'lc_swp_'.$header_width; 

	/*sticky menu*/
	$header_class = '';
	if (ARTEMIS_SWP_is_sticky_menu()) {
		$header_class = 'lc_sticky_menu';
	}

	/*custom menu styling*/
	$page_logo = $menu_bar_bg = $menu_txt_col = $above_menu_bg = $above_menu_txt_col = "";
	$has_custom_menu_styling = ARTEMIS_SWP_get_page_custom_menu_style($page_logo, $menu_bar_bg, $menu_txt_col, $above_menu_bg, $above_menu_txt_col);	
	
	if ($has_custom_menu_styling) {
		$header_class .= ' cust_page_menu_style';
	}
?>

<header id="at_page_header" class="header_centered_menu <?php echo esc_attr($header_class); ?>" data-menubg="<?php echo esc_attr($menu_bar_bg); ?>" data-menucol="<?php echo esc_attr($menu_txt_col); ?>">
	<div class="header_inner centered_menu split_menu lc_wide_menu <?php echo esc_attr($header_width); ?>">

		<div class="split_menu_left social_profiles_center_menu">
			<?php get_template_part('views/utils/social_profiles'); ?>
		</div>

		<div class="split_menu_center_outter">
			<div class="split_menu_center_inner">
				<?php
					$customWalker = new SWPFrontendWalkerNavMenu();
					/*render left menu*/
					wp_nav_menu(
						array(
						'theme_location'	=> 'split-left-menu', 
						'container'			=> 'nav',
						'container_class'	=> 'classic_menu centered_menu nav_split_left',
						'walker'			=> $customWalker
					)
				);
				?>

				<div class="split_menu_outter_logo">
					<div class="split_menu_inner_logo">
						<div id="logo" class="split_menu">
						<?php
							$logo_img = ARTEMIS_SWP_get_user_logo_img();
							if (!empty($logo_img)) {
						?>
								<a href="<?php echo esc_url(home_url('/')); ?>" class="global_logo">
									<img src="<?php echo esc_url($logo_img); ?>" alt="<?php bloginfo('name'); ?>">
								</a>

						<?php
							} else {
						?>
								<a href="<?php echo esc_url(home_url('/')); ?>" class="global_logo">
									<?php bloginfo('name'); ?>
								</a>
						<?php
							}

							/*custom page related logo*/
							if (!empty($page_logo)) {
							?>
								<a href="<?php echo esc_url(home_url('/')); ?>" class="cust_page_logo">
									<img src="<?php echo esc_url($page_logo); ?>" alt="<?php bloginfo('name'); ?>">
								</a>
							<?php
							}					
						?>
						</div>
					</div>
		  		</div>
					
					
				<?php
					wp_nav_menu(
						array(
							'theme_location'	=> 'split-right-menu', 
							'container'			=> 'nav',
							'container_class'	=> 'classic_menu centered_menu  nav_split_right',
							'walker'			=> $customWalker
						)
					);
				?>
			</div>
		</div>

		<div class="classic_header_icons split_menu_right">
			<div class="classic_header_icon centered_menu lc_search trigger_global_search vibrant_hover transition4">
				<span class="lnr lnr-magnifier"></span>
			</div>

			<?php 
			if (ARTEMIS_SWP_is_woocommerce_active()) {
			?>

				<div class="classic_header_icon centered_menu shop_icon artemis-swp-minicart-icon">
					<a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php esc_html__('View your shopping cart', 'artemis-swp'); ?>">
						<i class="fa fa-artemis-cart" aria-hidden="true"></i>
						<span class="cart-contents-count lc_swp_vibrant_bgc">
							<?php echo WC()->cart->get_cart_contents_count(); ?>
						</span>
					</a>

                    <div class="artemis-swp-minicart">
                         <?php woocommerce_mini_cart(); ?>
                    </div>
				</div>
					
			<?php
			}
			?>
		</div>
	</div>

	
	<?php 
	/*mobile menu*/
	get_template_part('views/menu/split_mobile_menu'); 
	?>
</header>
