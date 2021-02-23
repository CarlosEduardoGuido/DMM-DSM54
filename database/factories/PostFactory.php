<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
        'title' => $this->faker->sentence,
        'slug' => $this->faker->slug,
        'descripcion' => $this->faker->text(800),
        'image' => $this->faker->imageUrl(1280,720),
        'metatag' => $this->faker->text(7),
        'autor' => $this->faker->sentence,
        'date' =>$this->faker->datetime(),
        //declaramos la llaves foraneas
        'user_id' => rand(1,100),
        'category_id' => rand(1,100),
    ];
});
