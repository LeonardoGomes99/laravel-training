<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    public $timestamps = false;
    protected $table = 'book_categories';
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'book_id',
        'category_id'
    ]; 

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id' , 'id');
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id' , 'id');
    }

    //O nome do livro "era uma vez" categoria : suspense
    //O nome do livro "era uma vez" categoria : terror
}
