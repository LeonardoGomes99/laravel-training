<?php

namespace App\Models\Traits;

use Ramsey\Uuid\Uuid;

trait UuidAsPrimaryKey
{
    public function getKeyType()
    {
        return 'string';
    }

    /**
     * This function is used internally by models to
     * test if the model has auto increment value
     *
     * @return bool
     */
    public function getIncrementing()
    {
        return false;
    }

    public static function bootUuidAsPrimaryKey()
    {
        static::creating(function ($model) {
            $model->incrementing = false;

            $model->attributes[$model->getKeyName()] = isset($model->attributes[$model->getKeyName()])
                ? $model->attributes[$model->getKeyName()]
                : Uuid::uuid4()->toString();
        });
    }
}
