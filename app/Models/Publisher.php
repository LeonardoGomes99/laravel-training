<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
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
        'publisher_name'
    ];

    /**
     * Relaciomaneto do Publisher com o Book
     */
    public function book(){
        return $this->hasMany(Book::class, 'book_id' , 'id');
    }
}
