<?php

namespace Tests\Integration\Models;

use Tests\TestCase;
use App\Models\Category;
use App\Models\BookCategory;
use Illuminate\Support\Collection;

class CategoryTest extends TestCase
{
    /**
     * Verifica o relacionamento do Category com o BookCategory
     */
    public function testRelationshipCategoryAndBookCategory()
    {
        $category = factory(Category::class)->create();
        factory(BookCategory::class)->create([
            'category_id' => $category->id
        ]);

        $this->assertInstanceOf(
            Collection::class,
            $category->booksCategories
        );
        $this->assertInstanceOf(
            BookCategory::class,
            $category->booksCategories->first()
        );
    }
}
