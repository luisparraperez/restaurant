<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'clase_icono' => 'fas fa-cogs',
            'ruta' => 'gestion',
            'activo' => 'S',

            'created_at' => date('Y-m-d H:m:s'),
        ]);
        DB::table('modulos')->insert([
            'descripcion' => 'Menú',
            'clase_icono' => 'fas fa-utensils',
            'ruta' => 'menu',
            'activo' => 'S',

            'created_at' => date('Y-m-d H:m:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'Luis',
            'email' => 'luisparraperez1@gmail.com',
            'apellido_paterno' => 'Parra',
            'apellido_materno' => 'Pérez',
            'tipo_usuarios_id' => 2,

            'password' =>  Hash::make('1234'),
            'created_at' => date('Y-m-d H:m:s')
        ]); 
        
        DB::table('modulo_user')->insert([
            'user_id' => 1,
            'modulo_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
        ]);
        DB::table('modulo_user')->insert([
            'user_id' => 1,
            'modulo_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('menus')->insert([
            'modulo_id' => 1,
            'ruta'=>'permisos_usuario',
            'texto'=>'Permiso Usuarios',
            'created_at' => date('Y-m-d H:m:s'),
        ]);


        // \App\Models\User::factory(10)->create();
    }
}
