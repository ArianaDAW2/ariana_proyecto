<?php

namespace Database\Seeders;

use App\Models\User;
use Laravel\Sanctum\PersonalAccessToken;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RolePermissionUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Usuarios para test
        User::firstOrCreate(
            ['email' => 'admin@mail.es'],
            [
                'name' => 'admin',
                'password' => Hash::make('12345678'),
            ]
        );
        User::firstOrCreate(
            ['email' => 'vet@mail.es'],
            [
                'name' => 'veterinario',
                'password' => Hash::make('12345678'),
            ]
        );
        User::firstOrCreate(
            ['email' => 'recep@mail.es'],
            [
                'name' => 'recepcionista',
                'password' => Hash::make('12345678'),
            ]
        );
        User::firstOrCreate(
            ['email' => 'client@mail.es'],
            [
                'name' => 'cliente',
                'password' => Hash::make('12345678'),
            ]
        );
        User::firstOrCreate(
            ['email' => 'cuid@mail.es'],
            [
                'name' => 'cuidador',
                'password' => Hash::make('12345678'),
            ]
        );

        // 5 roles
        $roles = ['Admin', 'Veterinario', 'Recepcionista', 'Cliente', 'Cuidador'];
        foreach ($roles as $roleName) {
            Role::firstOrCreate(['name' => $roleName]);
        }

        // 5 Permisos
        $permissions = [
            'manage_users',
            'manage_reservations',
            'manage_medical_records',
            'manage_services',
            'manage_payments',
            'access_worker'
        ];

        foreach ($permissions as $perm) {
            Permission::firstOrCreate(['name' => $perm]);
        }

        // Asignar permisos a roles
        Role::findByName('Admin')->givePermissionTo(Permission::all());
        Role::findByName('Recepcionista')->givePermissionTo(['access_worker', 'manage_reservations', 'manage_payments', 'manage_users']);
        Role::findByName('Veterinario')->givePermissionTo(['access_worker', 'manage_medical_records', 'manage_services']);
        Role::findByName('Cuidador')->givePermissionTo(['access_worker', 'manage_medical_records']);
        Role::findByName('Cliente')->givePermissionTo([]);

        // Asignación inicial a usuarios de prueba
        $users = User::orderBy('id')->take(5)->get();
        // Bearer $user->name para la auth
        foreach ($users as $index => $user) {
            if (isset($roles[$index])) {
                $user->assignRole($roles[$index]);
                $user->tokens()->delete();
                PersonalAccessToken::create([
                    'tokenable_type' => User::class,
                    'tokenable_id' => $user->id,
                    'name' => 'api-' . $user->name,
                    'token' => hash('sha256', $user->name),
                    'abilities' => ['*'],
                ]);
            }
        }

    }
}
