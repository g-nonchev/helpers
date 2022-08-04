<?php


function default_no_quantities($individually, $product)
{
	$individually = false;
	return $individually;
}
add_filter('woocommerce_is_sold_individually', 'default_no_quantities', 10, 2);