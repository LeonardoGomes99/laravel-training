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
     * Ciclo completo de criação de um livro
     *
     * @return void
     */
    public function run()
    {
        $publisher = factory(Publisher::class)->create();
        factory(Book::class)->create(['publisher_id' => $publisher->id])->each(function ($book) {

            $category = factory(Category::class)->create();

            factory(BookCategory::class)->create([
                'book_id'     => $book->id,
                'category_id' => $category->id,
            ]);

            factory(Comment::class)->create(['book_id' => $book->id,]);
            factory(Suggestion::class)->create(['book_id' => $book->id,]);
            factory(Tag::class)->create(['book_id' => $book->id,]);
        });
    }
}
