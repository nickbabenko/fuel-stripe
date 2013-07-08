<?php
/**
 * 	Copy this file to fuel/app/config/ and update with your secret and publishable keys which you'll get from here
 * 	https://manage.stripe.com/#account/apikeys
 * 	
 * 	Note: I've set up Nginx to pass through the FUEL_ENV param so Fuelphp knows whether we are in dev or production and
 * 	assuming that if we are local, we are in test mode - you can obviously just hardcode these, but if not, add:
 * 
 * 	fastcgi_param FUEL_ENV production;
 * 
 * 	to your Nginx config file within the location block.
 * 
 */
if (Fuel::$env === Fuel::PRODUCTION) {
    return array(
        'publishable_key' => 'YOUR_LIVE_PUBLISHABLE_KEY',
        'secret_key' => 'YOUR_LIVE_SECRET_KEY',
    );

}
else {
    return array(
        'publishable_key' => 'YOUR_TEST_PUBLISHABLE_KEY',
        'secret_key' => 'YOUR_TEST_SECRET_KEY',
    );

}
