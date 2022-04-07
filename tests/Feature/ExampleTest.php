<?php

namespace Tests\Feature;

use App\Models\Tag;
use Tests\TestCase;
use App\Models\Book;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Suggestion;
use App\Models\BookCategory;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $test = factory(Tag::class)->create();
        dd($test);
    }
}
