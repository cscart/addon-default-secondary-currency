<?php

if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_default_secondary_currency_init_currency_post(&$params, &$area, &$primary_currency, &$secondary_currency)
{
    $secondary_currency = 'DESIRED_STOREFRONT_CURRENCY_CODE';
}
