<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

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
        return $this->belongsTo(Publisher::class);
    }

    public function bookCategories()
    {
        return $this->hasMany(BookCategory::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function suggestions(){
        return $this->hasMany(Suggestion::class);
    }

    public function tag()
    {
        return $this->hasMany(Tag::class);
    }
}
