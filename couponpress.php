<?php
/**
 * @package CouponPress
 * @author Mark Fail
 * @version 1.5
 */
/*
Plugin Name: CouponPress
Plugin URI: http://couponpress.com/
Description: CouponPress turns a normal Wordpress blog into a professional looking coupon code or voucher code website in minutes!
Author: PremiumPress
Version: 1.5
Author URI: http://www.premiumpress.com
*/

function couponpress_plugin_options() {

	add_menu_page(__('couponpress_plugin'), __('CouponPress','cp'), 8, basename(__FILE__), '', 'http://www.couponpress.com/favicon.ico');
 
	add_submenu_page(basename(__FILE__), __('couponpress_plugin','cp'), __('Getting Started','cp'), '10', basename(__FILE__), 'couponpress_plugin');	
	add_submenu_page(basename(__FILE__), __('couponpress_plugin','cp'), __('More Themes','cp'), '10', 'plugin_themes', 'couponpress_plugin_themes');	

}

function couponpress_plugin_logo(){

?>
<a href="http://www.premiumpress.com/?adminlink=couponpress" target="_blank">
<img src="http://www.premiumpress.com/inc/images/layout/logoSymbol-small.png" style="float:right; margin-top:10px;" />
</a>

<?php

}



function couponpress_plugin( ) { ?>

<div class="wrap"><?php echo couponpress_plugin_logo(); ?> 
<h2>Getting Started with CouponPress</h2>
<hr>
<p><b>NOTE: CouponPress plugin has now been redeveloped as a Wordpress theme.</b> </p>
<p>To use CouponPress please download the free Wordpress theme (below) and install it under the themes section of your Wordpress admin. </p>
<iframe src="http://premiumpress.com/downloads/?source=wordpress-plugin" width="100%" style="height:900px;"></iframe>
</div>
 
<?php }


function couponpress_plugin_themes( ) { ?>
<div class="wrap"><?php echo couponpress_plugin_logo(); ?> 
<h2>CouponPress Developed by PremiumPress</h2><hr>
<p>Take a look at some of our other premium wordpress themes at <a href="http://www.premiumpress.com" target="_blank">www.premiumpress.com</a></p>
<iframe src="http://premiumpress.com?source=wordpress-plugin" width="100%" style="height:900px;"></iframe>
</div>
 
<?php }

add_action('admin_menu', 'couponpress_plugin_options');
?>
