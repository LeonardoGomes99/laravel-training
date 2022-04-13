<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Book;
use App\Models\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'id'       => $this->faker->uuid(),
        'book_id'  => factory(Book::class),
        'comment'  => $this->faker->text(10),
    ];
});
