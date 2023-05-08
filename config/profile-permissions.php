<?php

use App\Enums\UserRolesEnum;

return [
    UserRolesEnum::ROOT => [
        'farms' => ['index', 'view', 'create', 'update', 'delete'],
        'users' => ['index', 'view', 'create', 'update', 'delete'],
        'animals' => ['index', 'view', 'create', 'update', 'delete'],
        'heats' => ['index', 'view', 'create', 'update', 'delete'],
        'health' => ['index', 'view', 'create', 'update', 'delete'],
        'medicament' => ['index', 'view', 'create', 'update', 'delete'],
    ],

    UserRolesEnum::ADMIN => [
        'farms' => ['index', 'view', 'create', 'update', 'delete'],
        'users' => ['index', 'view', 'create', 'update', 'delete'],
        'animals' => ['index', 'view', 'create', 'update', 'delete'],
        'heats' => ['index', 'view', 'create', 'update', 'delete'],
        'health' => ['index', 'view', 'create', 'update', 'delete'],
        'medicament' => ['index', 'view', 'create', 'update', 'delete'],
    ],

    UserRolesEnum::CLIENT => [
        'animals' => ['index', 'view', 'create', 'update', 'delete'],
        'heats' => ['index', 'view', 'create', 'update', 'delete'],
        'health' => ['index', 'view', 'create', 'update', 'delete'],
        'medicament' => ['index', 'view', 'create', 'update'],
    ],
];
