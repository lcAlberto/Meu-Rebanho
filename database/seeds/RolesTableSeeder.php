<?php

namespace Database\Seeders;

use App\Enums\UserRolesEnum;
use App\Support\PermissionsHelper;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $profiles = [
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

        $rootPermissions = Permission::all();
        $rootPermissions->pluck('name');
        $adminPermissions = [
            'farms index', 'farms view', 'farms create', 'farms update', 'farms delete',
            'users index', 'users view', 'users create', 'users update', 'users delete',
            'animals index', 'animals view', 'animals create', 'animals update', 'animals delete',
            'heats index', 'heats view', 'heats create', 'heats update', 'heats delete',
            'health index', 'health view', 'health create', 'health update', 'health delete',
            'medicament index', 'medicament view', 'medicament create', 'medicament update', 'medicament delete',
        ];
        $clientPermissions = [
            'animals index', 'animals view', 'animals create', 'animals update', 'animals delete',
            'heats index', 'heats view', 'heats create', 'heats update', 'heats delete',
            'health index', 'health view', 'health create', 'health update', 'health delete',
            'medicament index', 'medicament view', 'medicament create', 'medicament update', 'medicament delete',
        ];

        foreach ($profiles as $profile => $permissions) {
            $rolePermissions = PermissionsHelper::getFlattenPermissions($permissions);
            $role = Role::create([
                'name' => $profile,
                'guard_name' => 'web',
            ]);
            if ($profile == UserRolesEnum::ROOT)
                $role->givePermissionTo($rootPermissions);
            if ($profile == UserRolesEnum::ADMIN)
                $role->givePermissionTo($adminPermissions);
            if ($profile == UserRolesEnum::CLIENT)
                $role->givePermissionTo($clientPermissions);
        }
    }
}
