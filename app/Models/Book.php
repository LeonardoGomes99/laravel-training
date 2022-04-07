<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $timestamps = false;
    public $incrementing = false;
    protected $table = 'book';
    protected $primaryKey = 'id';
    protected $fillable = [
        'publisher_id',
        'book_name'
    ];

    public function publisher()
    {
        return $this->belongsTo(Publisher::class, 'publisher_id' , 'id');
    }

    public function bookCategories()
    {
        return $this->hasMany(BookCategory::class, 'book_id' , 'id');
    }

    public function comments(){
        return $this->hasMany(Comment::class, 'book_id' , 'id');
    }

    public function suggestions(){
        return $this->hasMany(Suggestion::class, 'book_id' , 'id');
    }

    public function tags()
    {
        return $this->hasMany(Tag::class, 'book_id' , 'id');
    }
}
