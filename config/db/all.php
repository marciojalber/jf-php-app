<?php

return [
    'backups'           => [
        'frequency'     => ['d', 1],
        'keep'          => ['d', 5],
        'schemas'       => [],
        'hosts'         => ['10.120.61.22'],
    ],
    'schemas'           => [
        'main'          => [
            'driver'    => 'mysql',
            'hostname'  => 'localhost',
            'username'  => 'root',
            'password'  => '',
            'dbname'    => 'main',
        ],
    ],
];
