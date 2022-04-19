<?php

namespace Tests\Integration\Models;

use Tests\TestCase;
use App\Models\Book;
use App\Models\Category;
use App\Models\BookCategory;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookCategoryTest extends TestCase
{
     /**
     * Verifica o relacionamento do BookCategory com o Book
     */
    public function testRelationshipBookCategoryAndBook()
    {
        $book = factory(Book::class)->create();
        $bookCategory = factory(BookCategory::class)->create([
            'book_id' => $book->id
        ]);
        $this->assertInstanceOf(
            Book::class,
            $bookCategory->book
        );
    }

    /**
     * Verifica o relacionamento do BookCategory com o Category
     */
    public function testRelationshipBookCategoryAndCategoty()
    {
        $category = factory(Category::class)->create();
        $bookCategory = factory(BookCategory::class)->create([
            'category_id' => $category->id
        ]);
        $this->assertInstanceOf(
            Category::class,
            $bookCategory->category
        );
    }
}
