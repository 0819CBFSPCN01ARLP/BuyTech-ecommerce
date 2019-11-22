<?php

use Illuminate\Database\Seeder;

class DiscosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('discos')->insert([
            'descripcion' => "4 TB",
        ]);
      DB::table('discos')->insert([
            'descripcion' => "2 TB",
        ]);
      DB::table('discos')->insert([
            'descripcion' => "1 TB",
          ]);
      DB::table('discos')->insert([
            'descripcion' => "500 GB",
        ]);    
    }
}
