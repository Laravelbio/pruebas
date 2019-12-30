<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() //PRUEBAS DE BASE DE DATOS PARA MIGRACIONES  'FUNCION ELIMINA DATOS TABLAS '
    {
        $this->truncateTables([

            'users'

        ]);

        // $this->call(UsersTableSeeder::class);
        $this->call(UserSeeder::class); //AGG USERSEEDER.PHP DONDE SE INSERTA UN DATO DE PRUEBA A LA TABLA USERS
    }

    protected function truncateTables(array $tables) //FUNCION DINAMICA DONDE CUALQUIER TABLA ES ELIMINADA PARA MIGRAR Y NO DUPLICAR TABLAS
    {
        foreach($tables as $table) {
            DB::table($table)->truncate();
        }
    }

}
