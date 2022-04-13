<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
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
        'comment'
    ];

    /**
     * Relaciomaneto do Comment com o Book
     */
    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id' , 'id');
    }
}
