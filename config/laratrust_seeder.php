<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadministrator' => [
            'User' => 'c,r,u,d',
            'Position' => 'c,r,u,d',
            'Process' => 'c,r,u,d',
            'Update' => 'c,r,u,d',
            'Vacation' => 'c,r,u,d',
            'Vacation_interval' => 'c,r,u,d',
        ],
        'administrator' => [
            'User' => 'c,r,u,d',
            'Process' => 'c,r,u,d',
            'Update' => 'c,r,u,d',
        ],
        'user' => [
            'Process' => 'c,r,u',
            'Update' => 'c,u',
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
