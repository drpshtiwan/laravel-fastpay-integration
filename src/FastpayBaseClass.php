<?php

namespace Basit\FastpayPayment;

class FastpayBaseClass
{
    protected static function baseUrl(): string
    {
        return config("fastpay.environment") == "production" ?
            config('fastpay.production_base_url') ?? "https://apigw-merchant.fast-pay.iq" :
            config('fastpay.staging_base_url') ?? "https://staging-apigw-merchant.fast-pay.iq";
    }
}
