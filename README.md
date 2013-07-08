fuel-stripe
===========

A simple FuelPHP package for the Stripe PHP API

= Installation

1. Add the files to fuel/packages/stripe. 
2. Copy the fuel/packages/stripe/config/stripe.php file to your fuel/app/config directory and update your publishable/secret keys from [https://manage.stripe.com/#account/apikeys](https://manage.stripe.com/#account/apikeys)
3. To load the packages, you can either add 'stripe' to the `'always_load'=> 'packages'` array in your fuel/app/config/config.php file or you can simply use Fuel's Package load syntax, i.e. `Package::load('stripe');`

= Usage

Stripe's PHP API documentation is available [here](https://stripe.com/docs/api?lang=php). 

The syntax is

`Stripe\Stripe::call('STRIPE_CLASS_NAME', 'METHOD_NAME', ARRAY_OF_VARIABLES);`

for example


    Package::load('stripe');
    Stripe\Stripe::call('Stripe_Customer', 'create', $arr);





