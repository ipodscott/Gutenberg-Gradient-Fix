<?php
/**
* Plugin Name: Gradient Color Fix
* Plugin URI: https://hazzardlabs.com/
* Description: This plugin adds a fix a for better visualization of the control point buttons within the Gutenberg gradient color picker.
* Version: 1.0
* Author: Doc Hazzard
* Author URI: https://hazzardlabs.com/
*/

function custom_admin_css() {
   echo '<style>
   .components-custom-gradient-picker__control-point-button, .react-colorful__alpha-pointer {
	  background-color: #00000050;
	  border-style: solid !important;
	  border-width: 1px !important;
	  border-color: #333 !important;
   }
   </style>';
}

add_action('admin_head', 'custom_admin_css');
?>
