<?php

use Illuminate\Database\Seeder;
// use Carbon\Carbon;
Use App\Models\Admin\Rol;

class TablaRolSeeder extends Seeder
{
    public function run()
    {
        $rols = [
            'administrador',
            'editor',
            'supervisor'
        ];
        foreach ($rols as $key => $value) {
            Rol::create([
                'nombre' => $value,
            ]);
        }

       /*  foreach ($rols as $key => $value) {
            DB::table('rol')->insert([
                'nombre' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        } */
    }
}
