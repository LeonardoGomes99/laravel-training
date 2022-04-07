<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'id'            => $this->faker->uuid(10),      
        'category_name' => $this->faker->text(10)
    ];
});
