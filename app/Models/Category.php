<?php

namespace App\Models;

use App\Models\Traits\UuidAsPrimaryKey;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use UuidAsPrimaryKey;
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
     * @var string
     */
    protected $table = 'categories';

    /**
     * @var array
     */
    protected $fillable = [
        'category_name',
    ];

    /**
     * Relacionamento do Category com BookCategory
     */
    public function booksCategories()
    {
        return $this->hasMany(BookCategory::class, 'category_id', 'id');
    }
}
