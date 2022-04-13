<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use SoftDeletes;

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
        'tag',
    ];

    /**
     * Relacionamento da Tag e Book
     */
    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id' , 'id');
    }
}
