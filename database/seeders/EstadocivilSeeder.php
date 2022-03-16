<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EstadoCivil;

class EstadocivilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dato = new EstadoCivil();
        $dato->descripcion = "SOLTERO";
        $dato->save();

        $dato1 = new EstadoCivil();
        $dato1->descripcion = "CASADO";
        $dato1->save();

        $dato2 = new EstadoCivil();
        $dato2->descripcion = "DIVORCIADO";
        $dato2->save();
    }
}
