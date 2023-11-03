<?php

declare(strict_types=1);

return [
    'config' => [
        'bcrypt' => [
            'rounds' => env('BCRYPT_ROUNDS', 12), // https://wiki.php.net/rfc/bcrypt_cost_2023
        ],
        'session' => [
            'encrypt' => env('DEFAULTO_SESSION_ENCRYPT', true),
            'expire_on_close' => env('DEFAULTO_SESSION_EXPIRE_ON_CLOSE', true),
            'same_site' => env('DEFAULTO_SESSION_SAME_SITE', 'strict'),
            'secure' => env('SESSION_SECURE_COOKIE', true),
        ],
    ],
    'immutable_dates' => env('DEFAULTO_IMMUTABLE_DATES', true),
];
