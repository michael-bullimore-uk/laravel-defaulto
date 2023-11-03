<?php

return [
    'immutable_dates' => env('DEFAULTO_IMMUTABLE_DATES', true),
    'merge_config' => [
        'session.encrypt' => env('DEFAULTO_SESSION_ENCRYPT', true),
        'session.expire_on_close' => env('DEFAULTO_SESSION_EXPIRE_ON_CLOSE', true),
        'session.same_site' => env('DEFAULTO_SESSION_SAME_SITE', 'strict'),
        'session.secure' => env('SESSION_SECURE_COOKIE', true),
    ],
];
