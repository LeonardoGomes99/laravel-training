<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Book;
use App\Models\Publisher;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'id'           => $this->faker->uuid(),
        'publisher_id' => factory(Publisher::class),
        'book_name'    => $this->faker->text(50),
    ];
});
