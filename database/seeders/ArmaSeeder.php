<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\arma;

class ArmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dato = new arma();
        $dato->nomarma = "Inf.";
        $dato->save();

        $dato1 = new arma();
        $dato1->nomarma = "Cab.";
        $dato1->save();

        $dato2 = new arma();
        $dato2->nomarma = "Art.";
        $dato2->save();

        $dato3 = new arma();
        $dato3->nomarma = "Ing.";
        $dato3->save();

        $dato4 = new arma();
        $dato4->nomarma = "Com.";
        $dato4->save();

        $dato5 = new arma();
        $dato5->nomarma = "Log.";
        $dato5->save();

        $dato6 = new arma();
        $dato6->nomarma = "San.";
        $dato6->save();
    }
}
