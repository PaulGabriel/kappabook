<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'twitter' => [
        'client_id' => 'kAN9sJSB1SRwMpMN5JueE2Cyz',
        'client_secret' => '9HJqZn8FjHlCE1kC4FrtcsFn1zNemvj59Qc0RPcf96mRJW6Qjm',
        'redirect' => 'http://shopping.dev/callback',
    ],

    'facebook' => [
        'client_id' => '164405800952889',
        'client_secret' => '90bdbb9e39adc3c7a552e4567397df08',
        'redirect' => 'http://shopping.dev/callback',
    ],

];
