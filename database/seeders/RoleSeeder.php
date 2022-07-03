<?php

namespace Database\Seeders;

use App\Models\Permiso;
use App\Models\Rol;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Rol::create(['name' => 'Administrador']);
        $operador = Rol::create(['name' => 'Operador']);

        Permiso::create([
            'name' => 'home.index',
            'description' => 'Ver Dashboard',
            'modulo_id' => 1,
        ])->syncRoles([$admin, $operador]);

        Permiso::create([
            'name' => 'usuarios.index',
            'description' => 'Ver Usuarios',
            'modulo_id' => 2,
        ])->syncRoles([$admin, $operador]);
        Permiso::create([
            'name' => 'usuarios.store',
            'description' => 'Agregar Usuarios',
            'modulo_id' => 2,
        ])->syncRoles([$admin]);
        Permiso::create([
            'name' => 'usuarios.update',
            'description' => 'Editar Usuarios',
            'modulo_id' => 2,
        ])->syncRoles([$admin]);
        Permiso::create([
            'name' => 'usuarios.destroy',
            'description' => 'Eliminar Usuarios',
            'modulo_id' => 2,
        ])->syncRoles([$admin]);

        Permiso::create([
            'name' => 'roles.index',
            'description' => 'Ver Rol',
            'modulo_id' => 3,
        ])->syncRoles([$admin, $operador]);
        Permiso::create([
            'name' => 'roles.store',
            'description' => 'Agregar Rol',
            'modulo_id' => 3,
        ])->syncRoles([$admin]);
        Permiso::create([
            'name' => 'roles.update',
            'description' => 'Editar Rol',
            'modulo_id' => 3,
        ])->syncRoles([$admin]);

        Permiso::create([
            'name' => 'permisos.index',
            'description' => 'Ver Permiso',
            'modulo_id' => 4,
        ])->syncRoles([$admin, $operador]);
        Permiso::create([
            'name' => 'permisos.store',
            'description' => 'Agregar Permiso',
            'modulo_id' => 4,
        ])->syncRoles([$admin]);
        Permiso::create([
            'name' => 'permisos.update',
            'description' => 'Editar Permiso',
            'modulo_id' => 4,
        ])->syncRoles([$admin]);

        Permiso::create([
            'name' => 'pilots.index',
            'description' => 'Ver Piloto',
            'modulo_id' => 5,
        ])->syncRoles([$admin, $operador]);
        Permiso::create([
            'name' => 'pilots.store',
            'description' => 'Agregar Piloto',
            'modulo_id' => 5,
        ])->syncRoles([$admin]);
        Permiso::create([
            'name' => 'pilots.update',
            'description' => 'Editar Piloto',
            'modulo_id' => 5,
        ])->syncRoles([$admin]);
        Permiso::create([
            'name' => 'pilots.destroy',
            'description' => 'Eliminar Piloto',
            'modulo_id' => 5,
        ])->syncRoles([$admin]);

        Permiso::create([
            'name' => 'teams.index',
            'description' => 'Ver Equipo',
            'modulo_id' => 6,
        ])->syncRoles([$admin, $operador]);
        Permiso::create([
            'name' => 'teams.store',
            'description' => 'Agregar Equipo',
            'modulo_id' => 6,
        ])->syncRoles([$admin]);
        Permiso::create([
            'name' => 'teams.update',
            'description' => 'Editar Equipo',
            'modulo_id' => 6,
        ])->syncRoles([$admin]);
        Permiso::create([
            'name' => 'teams.destroy',
            'description' => 'Eliminar Equipo',
            'modulo_id' => 6,
        ])->syncRoles([$admin]);

        Permiso::create([
            'name' => 'nationalities.index',
            'description' => 'Ver Nacionalidades',
            'modulo_id' => 7,
        ])->syncRoles([$admin, $operador]);
        Permiso::create([
            'name' => 'nationalities.store',
            'description' => 'Agregar Nacionalidades',
            'modulo_id' => 7,
        ])->syncRoles([$admin]);
        Permiso::create([
            'name' => 'nationalities.update',
            'description' => 'Editar Nacionalidades',
            'modulo_id' => 7,
        ])->syncRoles([$admin]);
        Permiso::create([
            'name' => 'nationalities.destroy',
            'description' => 'Eliminar Nacionalidades',
            'modulo_id' => 7,
        ])->syncRoles([$admin]);

        Permiso::create([
            'name' => 'races.index',
            'description' => 'Ver Carreras',
            'modulo_id' => 8,
        ])->syncRoles([$admin, $operador]);
        Permiso::create([
            'name' => 'races.store',
            'description' => 'Agregar Carreras',
            'modulo_id' => 8,
        ])->syncRoles([$admin]);
        Permiso::create([
            'name' => 'races.update',
            'description' => 'Editar Carreras',
            'modulo_id' => 8,
        ])->syncRoles([$admin]);
        Permiso::create([
            'name' => 'races.destroy',
            'description' => 'Eliminar Carreras',
            'modulo_id' => 8,
        ])->syncRoles([$admin]);

        Permiso::create([
            'name' => 'circuits.index',
            'description' => 'Ver Circuito',
            'modulo_id' => 9,
        ])->syncRoles([$admin, $operador]);
        Permiso::create([
            'name' => 'circuits.store',
            'description' => 'Agregar Circuito',
            'modulo_id' => 9,
        ])->syncRoles([$admin]);
        Permiso::create([
            'name' => 'circuits.update',
            'description' => 'Editar Circuito',
            'modulo_id' => 9,
        ])->syncRoles([$admin]);
        Permiso::create([
            'name' => 'circuits.destroy',
            'description' => 'Eliminar Circuito',
            'modulo_id' => 9,
        ])->syncRoles([$admin]);

    }
}
