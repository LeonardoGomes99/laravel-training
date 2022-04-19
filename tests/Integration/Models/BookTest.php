<?php

namespace Tests\Integration\Models;

use App\Models\Tag;
use Tests\TestCase;
use App\Models\Book;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Suggestion;
use App\Models\BookCategory;
use Illuminate\Support\Collection;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class BookTest extends TestCase
{
    /**
     * Verifica o relacionamento do Book com a Publisher
     */
    public function testRelationshipBookAndPublisher()
    {
        $publisher = factory(Publisher::class)->create();
        $book = factory(Book::class)->create([
            'publisher_id' => $publisher->id
        ]);

        $this->assertInstanceOf(
            Publisher::class,
            $book->publisher
        );
        $this->assertEquals(
            $publisher->id,
            $book->publisher->id
        );
    }

    /**
     * Verifica o relacionamento do Book com a BookCategory
     */
    public function testRelationshipBookAndBookCategory()
    {
        $book = factory(Book::class)->create();
        $category = factory(Category::class)->create();
        $booksCategories = factory(BookCategory::class)->create([
            'book_id' => $book->id,
            'category_id' => $category->id
        ]);

        $this->assertInstanceOf(
            Collection::class,
            $book->booksCategories
        );
        $this->assertInstanceOf(
            BookCategory::class,
            $book->booksCategories->first()
        );
    }

    /**
     * Verifica o relacionamento do Book com a Comment
     */
    public function testRelationshipBookAndComment()
    {
        $book = factory(Book::class)->create();
        factory(Comment::class,3)->create([
            'book_id' => $book->id
        ]);

        $this->assertInstanceOf(
            Collection::class,
            $book->comments
        );
        $this->assertInstanceOf(
            Comment::class,
            $book->comments->first()
        );
    }

    /**
     * Verifica o relacionamento do Book com a Suggestion
     */
    public function testRelationshipBookAndSuggestion()
    {
        $book = factory(Book::class)->create();
        factory(Suggestion::class,3)->create([
            'book_id' => $book->id
        ]);

        $this->assertInstanceOf(
            Collection::class,
            $book->suggestions
        );
        $this->assertInstanceOf(
            Suggestion::class,
            $book->suggestions->first()
        );
    }

    /**
     * Verifica o relacionamento do Book com a Tag
     */
    public function testRelationshipBookAndTag()
    {
        $book = factory(Book::class)->create();
        factory(Tag::class, 3)->create([
            'book_id' => $book->id
        ]);

        $this->assertInstanceOf(
            Collection::class,
            $book->tags
        );
        $this->assertInstanceOf(
            Tag::class,
            $book->tags->first()
        );
    }
}
