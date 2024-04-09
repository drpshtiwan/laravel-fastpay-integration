<?php

return [
    /*
   |--------------------------------------------------------------------------
   | Fastpay Environment
   |--------------------------------------------------------------------------
   |
   | This value is the environment that you want to choose for Fastpay integration to your application.
   | values are (staging, production)
   |
   */

    'environment' => env('FASTPAY_ENVIRONMENT', 'staging'),
    'staging_base_url' => env('FASTPAY_STAGING_BASE_URL', 'https://staging-apigw-merchant.fast-pay.iq'),
    'production_base_url' => env('FASTPAY_PRODUCTION_BASE_URL', 'https://apigw-merchant.fast-pay.iq'),

    /*
   |--------------------------------------------------------------------------
   | Credentials
   |--------------------------------------------------------------------------
   |
   | The account credentials you use to authenticate the request determines whether the request is live mode or test mode
   | Fastpay credentials are required to perform a transaction.
   */

    "store_id" => env('FASTPAY_STORE_ID'),
    "store_password" => env('FASTPAY_STORE_PASSWORD'),
    "refund_secret_key" => env('FASTPAY_REFUND_SECRET_KEY'),
];
