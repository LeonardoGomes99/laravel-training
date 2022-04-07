<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

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
        return $this->belongsTo(Book::class);
    }
}
