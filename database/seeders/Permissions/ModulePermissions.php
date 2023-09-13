<?php

namespace Database\Seeders\Permissions;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class ModulePermissions extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $resource = 'modules';
        $roles = [
            $resource . '.index',
            $resource . '.store',
        ];

        $permissionsByRole = [
            User::ROLE_ADMIN => $roles,
        ];

        $insertPermissions = fn ($role) => collect($permissionsByRole[$role])
        ->map(fn ($name) => DB::table('permissions')->insertGetId(['name' => $name, 'guard_name' => 'web']))
        ->toArray();

        $permissionIdsByRole = [
            User::ROLE_ADMIN => $insertPermissions(User::ROLE_ADMIN),
        ];

        foreach ($permissionIdsByRole as $role => $permissionIds) {
            $role = Role::whereName($role)->first();

            DB::table('role_has_permissions')
            ->insert(
                collect($permissionIds)->map(fn ($id) => [
                    'role_id' => $role->id,
                    'permission_id' => $id
                ])->toArray()
            );
        }
    }
}
