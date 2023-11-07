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
    'eloquent_relation_req_morph_map' => env('DEFAULTO_ELOQUENT_RELATION_REQ_MORPH_MAP', true),
    'eloquent_strict_mode' => env('DEFAULTO_ELOQUENT_STRICT_MODE', true),
    'immutable_dates' => env('DEFAULTO_IMMUTABLE_DATES', true),
];
