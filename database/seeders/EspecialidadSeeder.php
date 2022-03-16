<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\especialidad;

class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dato = new especialidad();
        $dato->nomespecialidad = "DAEN.";
        $dato->save();

        $dato1 = new especialidad();
        $dato1->nomespecialidad = "DEM.";
        $dato1->save();

        $dato2 = new especialidad();
        $dato2->nomespecialidad = "DIM.";
        $dato2->save();

        $dato3 = new especialidad();
        $dato3->nomespecialidad = "OEME.";
        $dato3->save();

        $dato4 = new especialidad();
        $dato4->nomespecialidad = "DEPSS";
        $dato4->save();

        $dato5 = new especialidad();
        $dato5->nomespecialidad = "Tgrafo.";
        $dato5->save();

        $dato6 = new especialidad();
        $dato6->nomespecialidad = "Mus.";
        $dato6->save();
    }
}
