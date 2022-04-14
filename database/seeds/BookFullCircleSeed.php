<?php

use App\Models\Tag;
use App\Models\Book;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Suggestion;
use App\Models\BookCategory;
use Illuminate\Database\Seeder;

class BookFullCircleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Publisher::class)->create();
        $book = factory(Book::class)->create();
        factory(Category::class, 3)->create()->each(function ($category) use ($book) {
            factory(BookCategory::class)->create([
                'book_id'     => $book->id,
                'category_id' => $category->id,
            ]);
        });
        factory(Comment::class)->create(['book_id' => $book->id,]);
        factory(Suggestion::class)->create(['book_id' => $book->id,]);
        factory(Tag::class)->create(['book_id' => $book->id,]);
    }
}
