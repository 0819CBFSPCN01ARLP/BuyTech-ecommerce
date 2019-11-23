<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(App\Producto::class, function (Faker $faker) {
    return [
      'modelo' => $faker->sentence(3),
      'precio' => $faker->numberBetween(20000, 80000),
      'stock' => $faker->numberBetween(0, 100),
      'descripcion' => $faker->sentence(15),
      'id_memoria' =>$faker->numberBetween(1,4),
      'id_marca' =>$faker->numberBetween(1,4),
      'id_pantalla' =>$faker->numberBetween(1,4),
      'id_disco' =>$faker->numberBetween(1,4),
      'id_procesador' =>$faker->numberBetween(1,4),
    ];
});
