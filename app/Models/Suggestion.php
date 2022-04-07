<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    public $timestamps = false;
    protected $table = 'suggestions';
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'book_id',
        'suggestion'
    ];

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id' , 'id');
    }
}
