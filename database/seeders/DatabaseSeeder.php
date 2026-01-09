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
    {   //Usuarios para test
        User::create([
            'name' => 'admin',
            'email' => 'admin@mail.es',
            'password' => '12345678',
        ]);
        User::create([
            'name' => 'vet',
            'email' => 'vet@mail.es',
            'password' => '12345678',
        ]);
        User::create([
            'name' => 'recep',
            'email' => 'recep@mail.es',
            'password' => '12345678',
        ]);
        User::create([
            'name' => 'client',
            'email' => 'client@mail.es',
            'password' => '12345678',
        ]);
        User::create([
            'name' => 'cuid',
            'email' => 'cuid@mail.es',
            'password' => '12345678',
        ]);
        //5 roles
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
        Role::findByName('Cliente')->givePermissionTo([]); // No necesita más //Borrar???

        // Asignación inicial a usuarios de prueba
        $users = User::orderBy('id')->take(5)->get();

        foreach ($users as $index => $user) {
            if (isset($roles[$index])) {
                $user->assignRole($roles[$index]);
            }
        }

    }
}
