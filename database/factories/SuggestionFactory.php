<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Book;
use App\Models\Suggestion;
use Faker\Generator as Faker;

$factory->define(Suggestion::class, function (Faker $faker) {
    return [
        'id'         => $this->faker->uuid(),
        'book_id'    => factory(Book::class), 
        'suggestion' => $this->faker->text()
    ];
});
