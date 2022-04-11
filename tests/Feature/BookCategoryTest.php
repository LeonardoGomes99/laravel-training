<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Book;
use App\Models\Category;
use App\Models\BookCategory;
use Illuminate\Support\Collection;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookCategoryTest extends TestCase
{
     /**
     * Verifica o relacionamento do BookCategory com o Book
     */
    public function testRelationshipBookCategoryAndBook()
    {
        $bookCategory = factory(BookCategory::class)->create();
        $this->assertInstanceOf(
            Book::class,
            $bookCategory->book->first()
        );
    }

    /**
     * Verifica o relacionamento do BookCategory com o Category
     */
    public function testRelationshipBookCategoryAndCategoty()
    {
        $bookCategory = factory(BookCategory::class)->create();
        $this->assertInstanceOf(
            Category::class,
            $bookCategory->categories
        );
    }
}
