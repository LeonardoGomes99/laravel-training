<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
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
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */
    protected $fillable = [
        'book_id',
        'suggestion'
    ];

    /**
     * Relaciomaneto do Suggestion com o Book
     */
    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id' , 'id');
    }
}
