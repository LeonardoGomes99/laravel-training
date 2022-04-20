<?php

namespace Tests\Integration\Models;

use Tests\TestCase;
use App\Models\Tag;
use App\Models\Book;

class TagTest extends TestCase
{
    /**
     * Verifica o relacionamento da Tag com o Book
     */
    public function testRelationshipTagAndBook()
    {
        $tag = factory(Tag::class)->create();
        $this->assertInstanceOf(
            Book::class,
            $tag->book
        );
    }
}
