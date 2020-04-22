<?php

use Illuminate\Database\Seeder;
use App\Models\Seguridad\Usuario;

class UsuarioAdministradorSeeder extends Seeder
{
    public function run()
    {
        $usuario = Usuario::create([
            'usuario' => 'admin',
            'nombre' => 'Administrador',
            'email' => 'rgt90@hotmail.com',
            'password' => 'pass123'
        ]);

        $usuario->roles()->sync(1);
    }

  /*  public function run()
    {
        DB::table('usuario')->insert([
            'usuario' => 'admin',
            'nombre' => 'Administrador',
            'password' => bcrypt('pass123')
        ]);

        DB::table('usuario_rol')->insert([
            'rol_id' => 1,
            'usuario_id' => 1,
            'estado' => 1
        ]);
    }
  */ 
}
