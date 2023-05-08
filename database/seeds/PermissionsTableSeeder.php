<?php

namespace Database\Seeders;

use App\Support\PermissionsHelper;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

//use Spatie\Permission\Contracts\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return array[]
     */

    private function getPermissions()
    {
        return [
            'farms' => ['index', 'view', 'create', 'update', 'delete'],
            'users' => ['index', 'view', 'create', 'update', 'delete'],
            'animals' => ['index', 'view', 'create', 'update', 'delete'],
            'heats' => ['index', 'view', 'create', 'update', 'delete'],
            'health' => ['index', 'view', 'create', 'update', 'delete'],
            'medicament' => ['index', 'view', 'create', 'update', 'delete'],
        ];
    }

    public function run()
    {
        $permissions = $this->getPermissions();
        $permissions = PermissionsHelper::getFlattenPermissions($permissions);
        foreach ($permissions as $permission) {
            $model = Permission::findOrCreate($permission, 'web');
            $model->save();
        }
    }
}
