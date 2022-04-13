<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
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
        'category_name',
    ];

    /**
     * Relaciomaneto do Category com BookCategory
     */
    public function bookCategories()
    {
        return $this->hasMany(BookCategory::class, 'category_id', 'id');
    }
}
