<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Book;
use App\Models\Tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
    return [
        'id'       => $this->faker->uuid(),
        'book_id'  => factory(Book::class),
        'tag'      => $this->faker->text(5) 
    ];
});
