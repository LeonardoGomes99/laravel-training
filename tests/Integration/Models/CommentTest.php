<?php

namespace Tests\Integration\Models;

use Tests\TestCase;
use App\Models\Book;
use App\Models\Comment;

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
