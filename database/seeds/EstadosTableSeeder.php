<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    $faker = Faker::create();
        //
DB::table('estados')->insert(['estado' =>'Aguascalientes']);
DB::table('estados')->insert(['estado' =>'Baja California']);
DB::table('estados')->insert(['estado' =>'Baja California Sur']);
DB::table('estados')->insert(['estado' =>'Campeche']);
DB::table('estados')->insert(['estado' =>'Coahuila de Zaragoza']);
DB::table('estados')->insert(['estado' =>'Colima']);
DB::table('estados')->insert(['estado' =>'Chiapas']);
DB::table('estados')->insert(['estado' =>'Chihuahua']);
DB::table('estados')->insert(['estado' =>'Distrito Federal']);
DB::table('estados')->insert(['estado' =>'Durango']);
DB::table('estados')->insert(['estado' =>'Guanajuato']);
DB::table('estados')->insert(['estado' =>'Guerrero']);
DB::table('estados')->insert(['estado' =>'Hidalgo']);
DB::table('estados')->insert(['estado' =>'Jalisco']);
DB::table('estados')->insert(['estado' =>'México']);
DB::table('estados')->insert(['estado' =>'Michoacán de Ocampo']);
DB::table('estados')->insert(['estado' =>'Morelos']);
DB::table('estados')->insert(['estado' =>'Nayarit']);
DB::table('estados')->insert(['estado' =>'Nuevo León']);
DB::table('estados')->insert(['estado' =>'Oaxaca']);
DB::table('estados')->insert(['estado' =>'Puebla']);
DB::table('estados')->insert(['estado' =>'Querétaro']);
DB::table('estados')->insert(['estado' =>'Quintana Roo']);
DB::table('estados')->insert(['estado' =>'San Luis Potosí']);
DB::table('estados')->insert(['estado' =>'Sinaloa']);
DB::table('estados')->insert(['estado' =>'Sonora']);
DB::table('estados')->insert(['estado' =>'Tabasco']);
DB::table('estados')->insert(['estado' =>'Tamaulipas']);
DB::table('estados')->insert(['estado' =>'Tlaxcala']);
DB::table('estados')->insert(['estado' =>'Veracruz de Ignacio de la Llave']);
DB::table('estados')->insert(['estado' =>'Yucatán']);
DB::table('estados')->insert(['estado' =>'Zacatecas']);


    }
}
