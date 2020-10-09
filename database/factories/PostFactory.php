<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'         =>      $faker->sentence(6),
        'post_date'     =>      $faker->date(),
        'published'     =>      true,
        'content'       =>      $faker->realText(500),
        'user_id'       =>      function () {
                                return App\User::inRandomOrder()->first()->id;
        }

        // todo: toma un numero aleatorio de usuarios y nos debuelve un objeto real, al cual le asignaremos un id real de un usuario que existe.
    ];
});
