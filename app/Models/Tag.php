<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $timestamps = false;
    protected $table = 'tag';
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'book_id',
        'tag'
    ];

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id' , 'id');
    }
}
