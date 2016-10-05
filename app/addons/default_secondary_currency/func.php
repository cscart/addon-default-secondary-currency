<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_default_secondary_currency_init_currency_post(&$params, &$area, &$primary_currency, &$secondary_currency)
{
    $storefront_code = Registry::get('addons.default_secondary_currency.storefront_code');

    if ($area == 'C') {
        if (array_key_exists('currency', $params)) {
            $secondary_currency = $params['currency'];
            Tygh::$app['session']['currency'] = $params['currency'];
        } elseif (Tygh::$app['session']['currency']) {
            $secondary_currency = Tygh::$app['session']['currency'];
        } else {
            $secondary_currency = $storefront_code;
        }
    }
}
