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
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
        'client_id' => '317666336293612',
        'client_secret' => '87ba9a817b98f11f6493e4333f9cf1b5',
        'redirect' => 'https://henhostu.online/auth/facebook/callback',
    ],

    'google' => [
    'client_id' => '573113721308-g79fjhk4obtonhq5l3rt5qerivnuh9gt.apps.googleusercontent.com',
    'client_secret' => 'POqpu32qgw6KZ6ycCnRy6Jb1',
    'redirect' => 'https://henhostu.online/auth/google/callback',
  ],
];
