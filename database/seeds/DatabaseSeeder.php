<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EstadosTableSeeder::class);
         $this->command->info("Tabla estados rellenada");
         $this->call(CiudadTableSeeder::class);
              $this->command->info("Tabla ciudades rellenada");
        
    }
}
