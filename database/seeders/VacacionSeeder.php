<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\vacacion;

class VacacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dato = new vacacion();
        $dato->desde = "0";
        $dato->hasta = "1";
        $dato->t_vacacion = "0";
        $dato->save();

        $dato1 = new vacacion();
        $dato1->desde = "2";
        $dato1->hasta = "5";
        $dato1->t_vacacion = "15";
        $dato1->save();

        $dato2 = new vacacion();
        $dato2->desde = "6";
        $dato2->hasta = "10";
        $dato2->t_vacacion = "20";
        $dato2->save();
        
        $dato3 = new vacacion();
        $dato3->desde = "11";
        $dato3->hasta = "20";
        $dato3->t_vacacion = "25";
        $dato3->save();

        $dato4 = new vacacion();
        $dato4->desde = "20";
        $dato4->hasta = "35";
        $dato4->t_vacacion = "30";
        $dato4->save();
    }
}
