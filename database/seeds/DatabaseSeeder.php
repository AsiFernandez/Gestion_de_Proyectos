<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(departamentosSeeder::class);
        $this->call(empleadosSeeder::class);
        $this->call(proyectosSeeder::class);
    }
}
