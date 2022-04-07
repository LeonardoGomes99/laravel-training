<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $timestamps = false;
    protected $table = 'comments';
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'book_id',
        'comment'
    ];

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id' , 'id');
    }
}
