<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Extension;

class ExtensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dato = new Extension();
        $dato->descripcion = "CH";
        $dato->save();

        $dato1 = new Extension();
        $dato1->descripcion = "LP";
        $dato1->save();

        $dato2 = new Extension();
        $dato2->descripcion = "CB";
        $dato2->save();

        $dato3 = new Extension();
        $dato3->descripcion = "OR";
        $dato3->save();

        $dato4 = new Extension();
        $dato4->descripcion = "PT";
        $dato4->save();

        $dato5 = new Extension();
        $dato5->descripcion = "TJ";
        $dato5->save();

        $dato6 = new Extension();
        $dato6->descripcion = "SC";
        $dato6->save();

        $dato7 = new Extension();
        $dato7->descripcion = "BE";
        $dato7->save();

        $dato8 = new Extension();
        $dato8->descripcion = "PD";
        $dato8->save();
    }
}
