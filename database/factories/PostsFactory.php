<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Post;
use App\User;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        'title' => $title,
        'body' => $faker->paragraph,
        'slug' => str_slug($title),
        'user_id' => function() {
            return User::firstOrFail()->id;
        }
    ];
});
