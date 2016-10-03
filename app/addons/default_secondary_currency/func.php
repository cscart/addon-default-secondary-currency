<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_default_secondary_currency_init_currency_post(&$params, &$area, &$primary_currency, &$secondary_currency)
{
    if ($area == 'C') {
        $old_secondary_currency = $secondary_currency ?: null;

        if ($old_secondary_currency != $secondary_currency) {
            $secondary_currency = Registry::get('addons.default_secondary_currency.storefront_code');
        }
    }
}
