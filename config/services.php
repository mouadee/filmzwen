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

    'facebook' => [
        'client_id' => '1674035859344113',         // Your Facebook Client ID
        'client_secret' => 'baf862a6706bf65347aaa45d49b10a02', // Your Facebook Client Secret
        'redirect' => 'http://localhost:8000/login/facebook',
    ],
    'google' => [
        'client_id' => '758270752880-s3j29tv5dnhg115potgm0q25pehm7el3.apps.googleusercontent.com',
        'client_secret' => '3GndlUA2QkLXnJ6KiMB7gV0V',
        'redirect' => 'http://localhost:8000/login/google',
    ],

];
