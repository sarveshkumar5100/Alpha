<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{

    public const CREATED_AT = 'created_at';
    public const CREATED_BY = 'created_by';
    public const UPDATED_AT = 'updated_at';
    public const UPDATED_BY = 'updated_by';
    public const DELETED_AT = 'deleted_at';

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    /**
     * Get the primary key for the model.
     *
     * @return string
     */
    public function getKeyName()
    {
        return 'id';
    }

    /**
     * Get the table associated with the model.
     *
     * @return string
     */
    public function getTable()
    {
        return str_plural(snake_case(class_basename($this)));
    }
}
