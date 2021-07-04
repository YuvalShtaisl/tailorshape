<?php

require_once( CDIR_PATH."/classes/widgets/ARTEMIS_SWP_recent_posts_with_images.php");
require_once( CDIR_PATH."/classes/widgets/ARTEMIS_SWP_contact_data.php");

function ARTEMIS_SWP_register_aswp_widgets() {
	register_widget('ARTEMIS_SWP_recent_posts_with_images');
	register_widget('ARTEMIS_SWP_contact_data');
}
add_action('widgets_init', "ARTEMIS_SWP_register_aswp_widgets");

?>