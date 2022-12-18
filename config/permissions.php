<?php

use CakeDC\Auth\Rbac\Rules\Owner;

return [
    'CakeDC/Auth.permissions' => [
        [
            'role' => '*',
            'controller' => 'Users',
            'action' => ['add', 'login', 'logout'],
            'bypassAuth' => true
        ],
        [
            'role' => 'admin',
            'controller' => '*',
            'action' => '*'
        ],
        [
            'role' => 'user',
            'controller' => ['Picks'],
            'action' => ['add', 'view', 'index']
        ],
        [
            'role' => 'user',
            'controller' => ['Picks'],
            'action' => ['edit', 'delete'],
            'allowed' => new Owner()
        ]
    ]
];
