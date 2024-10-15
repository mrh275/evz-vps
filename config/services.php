<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    /* Tripay Configuration */

    'tripay' => [
        'api_key' => env('TRIPAY_API_KEY', 'your-api-key'),
        'private_key' => env('TRIPAY_PRIVATE_KEY', 'your-private-key'),
        'merchant_code' => env('TRIPAY_MERCHANT_CODE', 'your-merchant-code'),
        'api_key_test' => env('TEST_API_KEY', 'your-api-key'),
        'private_key_test' => env('TEST_PRIVATE_KEY', 'your-private-key'),
        'merchant_code_test' => env('TEST_MERCHANT_CODE', 'your-merchant-code'),
    ],
];
