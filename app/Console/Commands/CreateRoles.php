<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateRoles extends Command
{
    protected $signature = 'app:create-roles';
    protected $description = 'Creates roles';

    public function handle(): void
    {
        try {
            $this->createAdmin();
            $this->createModerator();
        } catch (\Exception $e) {
            // pass
        }

        $this->comment('Done.');
    }

    private function createAdmin(): void
    {
        /** @var Role $admin */
        $admin = Role::create(['name' => 'admin']);

        $permissions = [
            'users add',
            'users edit',
            'users delete',

            'blog add',
        ];

        foreach ($permissions as $permission) {
            $perm = Permission::query()->where(['name' => $permission])->first();

            if ($perm === null) {
                $perm = Permission::create(['name' => $permission]);
            }

            $admin->givePermissionTo($perm);
        }
    }

    private function createModerator(): void
    {
        /** @var Role $moderator */
        $moderator = Role::create(['name' => 'moderator']);

        $permissions = [
            'blog add',
        ];

        foreach ($permissions as $permission) {
            $perm = Permission::query()->where(['name' => $permission])->first();

            if ($perm === null) {
                $perm = Permission::create(['name' => $permission]);
            }

            $moderator->givePermissionTo($perm);
        }
    }
}
