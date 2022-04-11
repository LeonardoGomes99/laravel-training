<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{    
    public $timestamps = false;
    protected $table = 'publisher';
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'publisher_name'
    ];

    public function book(){
        return $this->hasMany(Book::class, 'book_id');
    }
}
