<?php 

if (ARTEMIS_SWP_show_mobile_filter()) { ?>
	<div class="mobile_filter">
		<div class="mobile_filter_inner">
			<i class="fa fa-sliders"></i>
				<?php echo esc_html__('Refine Products', 'artemis-swp'); ?>
			</div>
			<span class="close_refine">
				<?php echo esc_html__('Close Filters', 'artemis-swp'); ?>
			</span>
		</div>
	<?php 
} 

?>