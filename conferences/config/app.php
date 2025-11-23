<?php

return [


    'name' => env('APP_NAME', 'Laravel'),

    'env' => env('APP_ENV', 'production'),

    'debug' => (bool) env('APP_DEBUG', false),

    'url' => env('APP_URL', 'http://localhost'),

    'timezone' => 'UTC',


    // Set default locale to Lithuanian (lt) - all UI texts will use Lithuanian translations
    'locale' => env('APP_LOCALE', 'lt'),

    // Fallback to English if Lithuanian translation is not found
    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),

    // Faker locale for generating Lithuanian test data
    'faker_locale' => env('APP_FAKER_LOCALE', 'lt_LT'),


    'cipher' => 'AES-256-CBC',

    'key' => env('APP_KEY'),

    'previous_keys' => [
        ...array_filter(
            explode(',', (string) env('APP_PREVIOUS_KEYS', ''))
        ),
    ],

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],

];
