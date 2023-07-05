<?php
/**
* Plugin Name: Gradient Color Fix
* Plugin URI: https://hazzardlabs.com/
* Description: This plugin adds fix for the cover gradient colors that improve visibility of the gradient color picker.
* Version: 1.0
* Author: Doc Hazzard
* Author URI: https://hazzardlabs.com/
*/

function custom_admin_css() {
   echo '<style>
   .components-custom-gradient-picker__control-point-button {
	  background-color: #00000050;
	  border-style: solid !important;
	  border-width: 1px !important;
	  border-color: #333 !important;
   }
   </style>';
}

add_action('admin_head', 'custom_admin_css');
?>