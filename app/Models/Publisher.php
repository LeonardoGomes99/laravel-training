<?php

namespace App\Models;

use App\Models\Traits\UuidAsPrimaryKey;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publisher extends Model
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
    protected $table = 'publishers';

    /**
     * @var array
     */
    protected $fillable = [
        'publisher_name',
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
        'publisher_name' => 'string',
    ];

    /**
     * Relacionamento do Publisher com o Book
     */
    public function books()
    {
        return $this->hasMany(Book::class, 'publisher_id' , 'id');
    }
}
