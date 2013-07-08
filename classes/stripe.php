<?php

namespace Stripe;

require_once PKGPATH . 'stripe' . DS . 'lib' . DS . 'Stripe.php';

class Stripe {
	
	/**
	 * 	
	 */
	public static function call($class, $method, $args) {
		$stripe = \Config::load('stripe', true, true);
		\Stripe::setApiKey($stripe['secret_key']);

		return call_user_func(array($class, $method), $args);
	}

}
