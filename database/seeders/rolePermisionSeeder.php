<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class rolePermisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // role create
        $roleSuperAdmin = Role::create(['name'=>'SuperAdmin']);
        $roleAdmin = Role::create(['name'=>'admin']);
        $roleEditor = Role::create(['name'=>'editor']);
        $roleUser = Role::create(['name'=>'user']);

        // create Permission
        $permissions = [
            [
                'group_name'=>'dasboard',
                'permissions'=>[
                    'dasboard.view',
                    'dasboard.edit',
                ]
            ],
            [
                'group_name'=>'blog',
                'permissions'=>[
                    'blog.create',
                    'blog.view',
                    'blog.edit',
                    'blog.delete',
                    'blog.approved',
                ]
            ],
            [
                'group_name'=>'admin',
                'permissions'=>[
                    'admin.create',
                    'admin.view',
                    'admin.edit',
                    'admin.delete',
                    'admin.approved',
                ]
            ],
            [
                'group_name'=>'role',
                'permissions'=>[
                    'role.create',
                    'role.view',
                    'role.edit',
                    'role.delete',
                    'role.approved',
                ]
            ],
            [
                'group_name'=>'profile',
                'permissions'=>[
                    'profile.view',
                    'profile.edit',
                ]
            ],
        ];
        for ($i=0; $i < count($permissions); $i++) { 
            $permissionGroups = $permissions[$i]['group_name'];
            for ($j=0; $j < count($permissions[$i]['permissions']); $j++) { 
                $permission = Permission::create(['name' => $permissions[$i]['permissions'][$j], 'group_name'=>$permissionGroups]);
                $roleSuperAdmin->givePermissionTo($permission);
                $permission->assignRole($roleSuperAdmin);
            }
        }
    }
}
