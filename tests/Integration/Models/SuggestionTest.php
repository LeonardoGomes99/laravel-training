<?php

namespace Tests\Integration\Models;

use Tests\TestCase;
use App\Models\Book;
use App\Models\Suggestion;

class SuggestionTest extends TestCase
{
    /**
     * Verifica o relacionamento do Suggestion com o Book
     */
    public function testRelationshipSuggestionAndBook()
    {
        $suggestion = factory(Suggestion::class)->create();
        $this->assertInstanceOf(
            Book::class,
            $suggestion->book
        );
    }
}
