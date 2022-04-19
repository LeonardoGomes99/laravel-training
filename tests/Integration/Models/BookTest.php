<?php

namespace Tests\Integration\Models;

use Tests\TestCase;
use App\Models\Tag;
use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Comment;
use App\Models\Publisher;
use App\Models\Suggestion;
use Illuminate\Support\Collection;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class BookTest extends TestCase
{
    /**
     * Verifica o relacionamento do Book com a Publisher
     */
    public function testRelationshipBookAndPublisher()
    {
        $book = factory(Book::class)->create();
        $this->assertInstanceOf(
            Publisher::class,
            $book->publisher->first()
        );
    }

    /**
     * Verifica o relacionamento do Book com a BookCategory
     */
    public function testRelationshipBookAndBookCategory()
    {
        $book = factory(Book::class)->create();
        $bookCategories = factory(BookCategory::class)->create([
            'book_id' => $book->id
        ]);
        $this->assertInstanceOf(
            Collection::class,
            $book->booksCategories
        );
    }

    /**
     * Verifica o relacionamento do Book com a Comment
     */
    public function testRelationshipBookAndComment()
    {
        $book = factory(Book::class)->create();
        $comments = factory(Book::class)->create();

        $this->assertInstanceOf(
            Collection::class,
            $book->comments
        );
    }

    /**
     * Verifica o relacionamento do Book com a Suggestion
     */
    public function testRelationshipBookAndSuggestion()
    {
        $book = factory(Book::class)->create();
        $suggestions = factory(Suggestion::class,3)->create([
            'book_id' => $book->id
        ]);
        $this->assertInstanceOf(
            Collection::class,
            $book->suggestions
        );
    }

    /**
     * Verifica o relacionamento do Book com a Tag
     */
    public function testRelationshipBookAndTag()
    {
        $book = factory(Book::class)->create();
        $tags = factory(Tag::class, 3)->create([
            'book_id' => $book->id
        ]);
        $this->assertInstanceOf(
            Collection::class,
            $book->tags
        );
    }
}
