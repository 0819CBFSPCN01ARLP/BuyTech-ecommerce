<?php

use Illuminate\Database\Seeder;

class ProcesadoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('procesadores')->insert([
            'descripcion' => "Intel Core i5",
        ]);
      DB::table('procesadores')->insert([
            'descripcion' => "Intel Core i7",
        ]);
      DB::table('procesadores')->insert([
            'descripcion' => "AMD Ryzen 3",
          ]);
      DB::table('procesadores')->insert([
            'descripcion' => "AMD Ryzen 5",
        ]);
    }
}
