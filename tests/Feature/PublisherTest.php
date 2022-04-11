<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Support\Collection;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PublisherTest extends TestCase
{
    /**
     * Verifica o relacionamento do Publisher com o Book
     */
    public function testRelationshipPublisherAndBook()
    {
        $publisher = factory(Publisher::class)->create();
        $this->assertInstanceOf(
            Collection::class,
            $publisher->book
        );
    }
}
