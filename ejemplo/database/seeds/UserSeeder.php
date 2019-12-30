<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() //INSERSION DE PRUEBA A LA TABLA USERS
    {
        DB::table('users')->insert([

            'id_user' => 'admin',
            'dni'  => 'none',
            'nombres' =>'none',
            'apellidos' =>'none',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
            'perfil' =>'Administrador',
            'asignacion' =>'Administrador',

        ]);
    }
}
