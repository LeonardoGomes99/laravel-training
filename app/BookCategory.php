<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    use HasFactory;

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
        return $this->belongsTo(Book::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    //O nome do livro "era uma vez" categoria : suspense
    //O nome do livro "era uma vez" categoria : terror
}
