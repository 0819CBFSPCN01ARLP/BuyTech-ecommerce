<?php

use Illuminate\Database\Seeder;

class PantallasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('pantallas')->insert([
            'descripcion' => '17.3"',
        ]);
      DB::table('pantallas')->insert([
            'descripcion' => '15.6"',
        ]);
      DB::table('pantallas')->insert([
            'descripcion' => '14.1"',
          ]);
      DB::table('pantallas')->insert([
            'descripcion' => '13.3"',
        ]);
    }
}
