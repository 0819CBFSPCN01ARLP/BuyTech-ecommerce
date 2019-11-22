<?php

use Illuminate\Database\Seeder;

class MemoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('memorias')->insert([
            'descripcion' => "4 GB",
        ]);
      DB::table('memorias')->insert([
            'descripcion' => "8 GB",
        ]);
      DB::table('memorias')->insert([
            'descripcion' => "12 GB",
          ]);
      DB::table('memorias')->insert([
            'descripcion' => "16 GB",
        ]);
    }
}
