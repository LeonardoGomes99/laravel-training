<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    /**
     * @var boolean
     */
    public $timestamps = false;

    /**
     * @var boolean
     */
    public $incrementing = false;

    /**
     * @var boolean
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */
    protected $fillable = [
        'book_id',
        'category_id'
    ]; 

    
    /**
     * Relacionamento do BookCategory com o Book
     */
    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id' , 'id');
    }

    
    /**
     * Relacionamento do BookCategory com o Category
     */
    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id' , 'id');
    }

    //O nome do livro "era uma vez" categoria : suspense
    //O nome do livro "era uma vez" categoria : terror
}
