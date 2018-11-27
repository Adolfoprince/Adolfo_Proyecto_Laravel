<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Compradores::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->text(20),
        'apellido' => $faker->text(20),
        'direccion' =>$faker->text(40),
    ];
});

$factory->define(App\Productos::class, function (Faker\Generator $faker) {

    return [
        'name_comprador' => $faker->text(20),
        'name' => $faker->text(20),
        'descripcion' =>$faker->text(30),
        'fabricante' =>$faker->text(30),
    ];
});

$factory->define(App\Pagos::class, function (Faker\Generator $faker) {

    return [
        'name_producto' => $faker->text(20),
        'tipo_pago' => $faker->text(20),
        ];
});