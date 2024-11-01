<?php
/*
Plugin Name: WP AutoZoom 
Plugin URI:  http://www.grupomayanvacations.com/wp-autozoom/ 
Description: Plug-in convert automatically all links to images to a inner zoom window.
Author: Demian Rice
Version: 1.0
Author URI: http://grupomayanvacations
*/


// *********** PARSER ***********

$urlPlugin = get_option("siteurl") . '/wp-content/plugins/'. basename(dirname(__FILE__));
function wpautozoom_setfiles()
{	
	global $urlPlugin;
	
	echo '<script type="text/javascript" src="' . $urlPlugin . '/wp-autozoomhtml.js">' .
		 '</script>' . "\n";
	
	echo '<script type="text/javascript" src="' . $urlPlugin . '/wp-autozoom.js">' .
		 '</script>' . "\n";

};	

function wpautozoom_init()
{
	global $urlPlugin;
    ?>
    
    <script type="text/javascript">
    	var zoomImagesURI = '<?php echo $urlPlugin ?>/images/';
    	document.body.onload = setupZoom();
    </script>

    
    <?php
			
}

add_action("wp_footer","wpautozoom_setfiles");
add_action("wp_footer","wpautozoom_init");

?>