<?php


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\User;
use App\Producto;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
            'nombre' => "admin",
            'apellido' => "admin",
            'email' => 'admin@gmail.com',
            'rol' => 1,
            'password' => bcrypt('password'),
        ]);

      $this->call([
        DiscosTableSeeder::class,
        MarcasTableSeeder::class,
        MemoriasTableSeeder::class,
        PantallasTableSeeder::class,
        ProcesadoresTableSeeder::class,
    ]);
      factory(App\User::class)->times(30)->create();
      factory(App\Producto::class)->times(30)->create();

    }
}
