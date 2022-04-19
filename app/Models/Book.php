<?php

namespace App\Models;

use App\Models\Traits\UuidAsPrimaryKey;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;
    use UuidAsPrimaryKey;

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
    protected $table = 'books';

    /**
     * @var array
     */
    protected $fillable = [
        'publisher_id',
        'book_name',
    ];

    /**
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'id' => 'string',
        'publisher_id' => 'string',
        'book_name' => 'string',
    ];

    /**
     * Relacionamento do Book com a Publisher
     */
    public function publisher()
    {
        return $this->belongsTo(Publisher::class, 'publisher_id', 'id');
    }

    /**
     * Relacionamento do Book com o BookCategory
     */
    public function booksCategories()
    {
        return $this->hasMany(BookCategory::class, 'book_id', 'id');
    }

    /**
     * Relacionamento do Book com o Comment
     */
    public function comments()
    {
        return $this->hasMany(Comment::class, 'book_id', 'id');
    }

    /**
     * Relacionamento do Book com o Suggestion
     */
    public function suggestions()
    {
        return $this->hasMany(Suggestion::class, 'book_id', 'id');
    }

    /**
     * Relacionamento do Book com a Tag
     */
    public function tags()
    {
        return $this->hasMany(Tag::class, 'book_id', 'id');
    }
}
