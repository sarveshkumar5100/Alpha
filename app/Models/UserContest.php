<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserContest extends Model
{
    use SoftDeletes;
    const USER_ID = 'user_id';
    const CONTEST_ID = 'contest_id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'deleted_at';
    const SCORE = 'score';
    const STATUS = 'status';
    const CREATED_BY = 'created_by';
    const UPDATED_BY = 'updated_by';

    protected $fillable = [
        'user_id',
        'contest_id',
        'created_at',
        'updated_at',
        'deleted_at',
        'score',
        'status',
        'created_by',
        'updated_by'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function contest()
    {
        return $this->belongsTo(Contest::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
