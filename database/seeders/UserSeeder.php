<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'nano',
            'apellido_paterno' => 'Martinez',
            'apellido_materno' => 'Ramirez',
            'email' => 'bernardo.martinez@mustango.com.mx',
            'phone_number' => '4381231962',
            'password' => bcrypt('Ner52do10ca#'),
        ])->assignRole('Administrador');
    }
}
