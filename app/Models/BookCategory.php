<?php

namespace App\Models;

use App\Models\Traits\UuidAsPrimaryKey;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookCategory extends Model
{
    use SoftDeletes;
    use UuidAsPrimaryKey;

    /**
     * @var boolean
     */
    public $incrementing = false;

    /**
     * @var boolean
     */
    protected $primaryKey = 'id';

    /**
     * @var string
     */
    protected $table = 'books_categories';

    /**
     * @var array
     */
    protected $fillable = [
        'book_id',
        'category_id',
    ];

    /**
     * Relacionamento do BookCategory com o Book
     */
    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }

    /**
     * Relacionamento do BookCategory com o Category
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
