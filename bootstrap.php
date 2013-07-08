<?php

Autoloader::add_namespace('Stripe', __DIR__ . '/classes');
Autoloader::add_classes(array('Stripe\\Stripe' => __DIR__ . '/classes/stripe.php', ));
