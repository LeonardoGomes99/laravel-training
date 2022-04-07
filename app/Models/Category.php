<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    protected $table = 'categories';
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'category_name'
    ];

    public function bookCategories()
    {
        return $this->hasMany(BookCategory::class, 'category_id' , 'id');
    }

    //O nome do livro "era uma vez" categoria : suspense
    //O nome do livro "era uma vez" categoria : terror
    //O nome do livro "a casa de cera" categoria : terror
}
