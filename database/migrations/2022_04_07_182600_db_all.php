<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbAll extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publishers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('publisher_name');
        });

        Schema::create('books', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('publisher_id');
            $table->string('book_name');

            $table->foreign('publisher_id')
            ->references('id')
            ->on('publishers')
            ->onDelete('cascade');
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('category_name');
        });

        Schema::create('book_categories', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('book_id');
            $table->uuid('category_id');

            $table->foreign('book_id')
            ->references('id')
            ->on('books')
            ->onDelete('cascade');

            $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade');
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('book_id');
            $table->string('comment');

            $table->foreign('book_id')
            ->references('id')
            ->on('books')
            ->onDelete('cascade');
        });

        Schema::create('tags', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('book_id');
            $table->string('tag');

            $table->foreign('book_id')
            ->references('id')
            ->on('books')
            ->onDelete('cascade');
        });

        Schema::create('suggestions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('book_id');
            $table->string('suggestion');

            $table->foreign('book_id')
            ->references('id')
            ->on('books')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
