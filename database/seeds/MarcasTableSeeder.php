<?php

use Illuminate\Database\Seeder;

class MarcasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('marcas')->insert([
            'descripcion' => "Lenovo",
        ]);
      DB::table('marcas')->insert([
            'descripcion' => "HP",
        ]);
      DB::table('marcas')->insert([
            'descripcion' => "Asus",
          ]);
      DB::table('marcas')->insert([
            'descripcion' => "Acer",
        ]);      //
    }
}
