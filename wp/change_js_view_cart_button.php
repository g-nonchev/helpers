
<?php
add_filter('woocommerce_get_script_data', 'change_js_view_cart_button', 10, 2);
function change_js_view_cart_button($params, $handle)
{
	if ('wc-add-to-cart' !== $handle) return $params;

	// Changing "view_cart" button text and URL
	$params['i18n_view_cart'] = esc_attr__("Checkout", "woocommerce"); // Text
	$params['cart_url']      = esc_url(wc_get_checkout_url()); // URL

	return $params;
}

