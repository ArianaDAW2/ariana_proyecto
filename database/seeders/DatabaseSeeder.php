<?php

namespace Database\Seeders;

use App\Models\Pet;
use App\Models\User;
use FontLib\Table\Type\name;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {   //1 User para Admin
        User::create([
            'name' => 'Ariana',
            'email' => 'admin@mail.es',
            'password' => '12345678',
        ]);
        // 5 roles
        $roles = ['Admin', 'Veterinario', 'Recepcionista', 'Cliente', 'Cuidador'];
        foreach ($roles as $roleName) {
            Role::firstOrCreate(['name' => $roleName]);
        }

        // 5 Permisos
        $permissions = [
            'manage_users',
            'manage_reservations',
            'view_medical_records',
            'create_reports',
            'manage_payments'
        ];

        foreach ($permissions as $perm) {
            Permission::firstOrCreate(['name' => $perm]);
        }

        // Asignar permisos a roles
        Role::findByName('Admin')->givePermissionTo(Permission::all());
        Role::findByName('Recepcionista')->givePermissionTo(['manage_reservations', 'create_reports']);
        Role::findByName('Veterinario')->givePermissionTo(['view_medical_records', 'create_reports']);
        Role::findByName('Cuidador')->givePermissionTo(['manage_reservations']);
        Role::findByName('Cliente')->givePermissionTo([]); // permisos limitados

        // Asignación inicial a usuarios de prueba
        if ($admin = User::first()) {
            $admin->assignRole('Admin');
        }
    }
}
