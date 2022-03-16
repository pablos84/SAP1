<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grado;

class GradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grado = new Grado();
        $grado->nomgrado = "Gral. Ejto.";
        $grado->save();

        $grado1 = new Grado();
        $grado1->nomgrado = "Gral. Div.";
        $grado1->save();

        $grado2 = new Grado();
        $grado2->nomgrado = "Gral. Brig.";
        $grado2->save();

        $grado3 = new Grado();
        $grado3->nomgrado = "Cnl.";
        $grado3->save();

        $grado4 = new Grado();
        $grado4->nomgrado = "Tcnl.";
        $grado4->save();

        $grado5 = new Grado();
        $grado5->nomgrado = "My.";
        $grado5->save();

        $grado6 = new Grado();
        $grado6->nomgrado = "Cap.";
        $grado6->save();

        $grado7 = new Grado();
        $grado7->nomgrado = "Tte.";
        $grado7->save();
        
        $grado = new Grado();
        $grado->nomgrado = "Sbtte.";
        $grado->save();

        $grado8 = new Grado();
        $grado8->nomgrado = "Sof. Mtre.";
        $grado8->save();

        $grado9 = new Grado();
        $grado9->nomgrado = "Sof. My.";
        $grado9->save();

        $grado10 = new Grado();
        $grado10->nomgrado = "Sof. 1ro.";
        $grado10->save();

        $grado11 = new Grado();
        $grado11->nomgrado = "Sof. 2do.";
        $grado11->save();

        $grado12 = new Grado();
        $grado12->nomgrado = "Sof. Incl.";
        $grado12->save();

        $grado13 = new Grado();
        $grado13->nomgrado = "Sgto. 1ro.";
        $grado13->save();

        $grado14 = new Grado();
        $grado14->nomgrado = "Sgto. 2do.";
        $grado14->save();

        $grado15 = new Grado();
        $grado15->nomgrado = "Sgto. Incl.";
        $grado15->save();   
    }
}
