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
        $publisher = factory(Publisher::class)->create();
        factory(Book::class)->create(['publisher_id' => $publisher->id])->each(function ($book) {

            //Aqui tem 3 categorias, pra vincular as 3 ao BookCategories, vai ser necessário um laço
            $categories = factory(Category::class, 3)->create();

            //Tipo, jogar esse trecho dentro de um foreach pra criar os vínculos
            factory(BookCategory::class)->create([
                'book_id'     => $book->id,
                'category_id' => $categories->id,
            ]);

            factory(Comment::class)->create(['book_id' => $book->id,]);
            factory(Suggestion::class)->create(['book_id' => $book->id,]);
            factory(Tag::class)->create(['book_id' => $book->id,]);
        });
    }
}
