<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sexo;

class SexoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dato = new Sexo();
        $dato->descripcion = "MASCULINO";
        $dato->save();

        $dato1 = new Sexo();
        $dato1->descripcion = "FEMENINO";
        $dato1->save();
    }
}
