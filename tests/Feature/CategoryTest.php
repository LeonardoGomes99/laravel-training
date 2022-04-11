<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Category;
use App\Models\BookCategory;
use Illuminate\Support\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class CategoryTest extends TestCase
{
    /**
     * Verifica o relacionamento do Category com o BookCategory
     */
    public function testRelationshipCategoryAndBookCategory()
    {
        $category = factory(Category::class)->create();
        $this->assertInstanceOf(
            Collection::class,
            $category->bookCategories
        );
    }
}
