<?php

namespace Tests\Integration\Models;

use Tests\TestCase;
use App\Models\Book;
use App\Models\Comment;
use Illuminate\Support\Collection;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommentTest extends TestCase
{
    /**
     * Verifica o relacionamento do Comment com o Book
     */
    public function testRelationshipCommentAndBook()
    {
        $comment = factory(Comment::class)->create();
        $this->assertInstanceOf(
            Book::class,
            $comment->book
        );
    }
}
