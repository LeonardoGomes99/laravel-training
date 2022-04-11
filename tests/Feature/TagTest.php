<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Tag;
use App\Models\Book;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TagTest extends TestCase
{
    /**
     * Verifica o relacionamento da Tag com o Book
     */
    public function testRelationshipCommentAndBook()
    {
        $tag = factory(Tag::class)->create();
        $this->assertInstanceOf(
            Book::class,
            $tag->book->first()
        );
    }
}
