<?php

namespace Stripe;

require_once PKGPATH . 'stripe' . DS. 'vendor' .DS . 'lib' . DS . 'Stripe.php';

class Stripe {
	
	public static $init;

	/**
	 *  Sets the API key from the values in your config. 
	 */
	public static function auth() {
		
		if(!self::$init) {
			$config = \Config::load('stripe');
			self::$init = \Stripe::setApiKey($config['secret_key']);	
		}
		
	}

	/**
	 * Wrapper for Stripe php library.
	 * @param (string) $class - The name of the Stripe class, eg 'Customer', 'Charge', etc
	 * @param (string) $method - The name of the method within the class, eg 'all'
	 * @param (array) $args - an array of data to be passed as parameters to the function
	 */
	public static function call($class, $method, $args) {
		
		self::auth();
		
		return call_user_func(array(
			$class,
			$method
		), $args);
	}

}
