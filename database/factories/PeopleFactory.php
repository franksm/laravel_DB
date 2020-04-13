<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\People;
use Faker\Generator as Faker;

$factory->define(People::class, function (Faker $faker) {
   
    $born = $faker->dateTimeBetween('1990-01-01', '2012-12-31')
    ->format('Y/m/d');
    $age = call_user_func(function() use( $born){
        return (date('Y') - date('Y', strtotime($born)));
    });

    return [
        'name' => $faker->name,
        'age' => $age,
        'born' => $born
    ];
});
