<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Book;
use App\Models\Category;
use App\Models\BookCategory;
use Faker\Generator as Faker;

$factory->define(BookCategory::class, function (Faker $faker) {
    return [
        'id'          => $this->faker->uuid(),
        'book_id'     => factory(Book::class),
        'category_id' => factory(Category::class),
    ];
});
