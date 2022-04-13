<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
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
        'category_name'
    ];

    /**
     * Relaciomaneto do Category com BookCategory
     */
    public function bookCategories()
    {
        return $this->hasMany(BookCategory::class, 'category_id' , 'id');
    }

    //O nome do livro "era uma vez" categoria : suspense
    //O nome do livro "era uma vez" categoria : terror
    //O nome do livro "a casa de cera" categoria : terror
}
