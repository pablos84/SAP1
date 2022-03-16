<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Escalafon;

class EscalafonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dato = new Escalafon();
        $dato->nomescalafon = "OO. SUP.";
        $dato->save();

        $dato1 = new Escalafon();
        $dato1->nomescalafon = "OO. SUB.";
        $dato1->save();

        $dato2 = new Escalafon();
        $dato2->nomescalafon = "SOFS.";
        $dato2->save();

        $dato3 = new Escalafon();
        $dato3->nomescalafon = "SGTOS";
        $dato3->save();

        $dato4 = new Escalafon();
        $dato4->nomescalafon = "EE. CC.";
        $dato4->save();
    }
}
