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
    'tmdp' => [
      'token' => env('TMPD_TOKEN','eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI4YTkwZmU5ZjM5NWYxZjk2ZTA1MGNiYzUzM2M5MGM4OCIsIm5iZiI6MTY4MjY2NDE3OC4yOCwic3ViIjoiNjQ0YjZhZjI1MWE2NGUwOGQ2ZGQyYjc1Iiwic2NvcGVzIjpbImFwaV9yZWFkIl0sInZlcnNpb24iOjF9.WDI4HremoiDaCQo2QnaG2X95i0t2cS63BCSVr9DPL5E'),
    ],

];
