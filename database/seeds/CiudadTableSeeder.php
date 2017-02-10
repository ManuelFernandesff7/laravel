<?php

use Illuminate\Database\Seeder;

class CiudadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          DB::table("ciudad")->insert(array(
            array(
                "estado_id"        => 1,
                "ciudad"    => 'Aguascalientes',
            ),
            array(
                "estado_id"        => 1,
                "ciudad"    => 'Asientos',
            ),
            array(
                "estado_id"        => 1,
                "ciudad"    => 'Calvillo',
            ),
            array(
                "estado_id"        => 1,
                "ciudad"    => 'Cosio',
            ),
            array(
                "estado_id"        => 1,
                "ciudad"    => 'Jesus Maria',
            ),
            array(
                "estado_id"        => 1,
                "ciudad"    => 'Pabellon de Arteaga',
            ),
            array(
                "estado_id"        => 1,
                "ciudad"    => 'Rincon de Romos',
            ),
            array(
                "estado_id"        => 1,
                "ciudad"    => 'San Jose de Gracia',
            ),
            array(
                "estado_id"        => 1,
                "ciudad"    => 'Tepezala',
            ),
            array(
                "estado_id"        => 1,
                "ciudad"    => 'El Llano',
            ),
            array(
                "estado_id"        => 1,
                "ciudad"    => 'San Francisco de los Romo',
            )
        ));
        
    }
}
