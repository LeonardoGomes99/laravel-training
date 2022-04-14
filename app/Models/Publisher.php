<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publisher extends Model
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
        'publisher_name',
    ];

    /**
     * Relacionamento do Publisher com o Book
     */
    public function book()
    {
        return $this->hasMany(Book::class, 'book_id' , 'id');
    }
}
