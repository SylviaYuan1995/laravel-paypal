<?php
/**
 * PayPal Setting & API Credentials
 * Created by Raza Mehdi <srmk@outlook.com>.
 */

return [
    'mode'    => env('PAYPAL_MODE', 'sandbox'), // Can only be 'sandbox' Or 'live'. If empty or invalid, 'live' will be used.

    'sandbox' => [
        'client_id'         => env('PAYPAL_SANDBOX_CLIENT_ID', ''),
        'client_secret'     => env('PAYPAL_SANDBOX_CLIENT_SECRET', ''),
        'app_id'            => 'APP-80W284485P519543T',
        'self_merchant_id'  => env('PAYPAL_SANDBOX_SELF_MERCHANT_ID', ''),  //自己的PayPal商家号, 登陆sand.paypal.com ->账户设置->公司信息->PayPal商家号
        'paypal_partner_attribution_id'=> env('PAYPAL_SANDBOX_PARTNER_ATTRIBUTION_ID', ''),
    ],
    'live' => [
        'client_id'         => env('PAYPAL_LIVE_CLIENT_ID', ''),
        'client_secret'     => env('PAYPAL_LIVE_CLIENT_SECRET', ''),
        'app_id'            => '',
        'self_merchant_id'  => env('PAYPAL_LIVE_SELF_MERCHANT_ID', ''),  //自己的PayPal商家号, 登陆sand.paypal.com ->账户设置->公司信息->PayPal商家号
        'paypal_partner_attribution_id'=> env('PAYPAL_LIVE_PARTNER_ATTRIBUTION_ID', ''),
    ],

    'payment_action' => env('PAYPAL_PAYMENT_ACTION', 'Sale'), // Can only be 'Sale', 'Authorization' or 'Order'
    'currency'       => env('PAYPAL_CURRENCY', 'USD'),
    'notify_url'     => env('PAYPAL_NOTIFY_URL', ''), // Change this accordingly for your application.
    'locale'         => env('PAYPAL_LOCALE', 'en_US'), // force gateway language  i.e. it_IT, es_ES, en_US ... (for express checkout only)
    'validate_ssl'   => env('PAYPAL_VALIDATE_SSL', true), // Validate SSL when creating api client.
];
