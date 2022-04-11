<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Book;
use App\Models\Publisher;
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
        $this->assertInstanceOf(
            Collection::class,
            $book->bookCategories
        );
    }

    /**
     * Verifica o relacionamento do Book com a Comment
     */
    public function testRelationshipBookAndComment()
    {
        $book = factory(Book::class)->create();
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
        $this->assertInstanceOf(
            Collection::class,
            $book->tags
        );
    }
}
