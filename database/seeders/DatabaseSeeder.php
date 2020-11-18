<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('tipo_usuarios')->insert([
            'descripcion' => 'Cliente',
            'created_at' => date('Y-m-d H:m:s'),
        ]);
        DB::table('tipo_usuarios')->insert([
            'descripcion' => 'Administrador',
            'created_at' => date('Y-m-d H:m:s'),
        ]);
        DB::table('tipo_usuarios')->insert([
            'descripcion' => 'Trabajador',
            'created_at' => date('Y-m-d H:m:s'),
        ]);
        DB::table('modulos')->insert([
            'descripcion' => 'Gestión',
            'clase_icono' => '',
            'created_at' => date('Y-m-d H:m:s'),
        ]);
        DB::table('modulos')->insert([
            'descripcion' => 'Menú',
            'clase_icono' => '',
            'created_at' => date('Y-m-d H:m:s'),
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
