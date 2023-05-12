<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContestPrize extends BaseModel
{
    use HasFactory, SoftDeletes;

    const Table = "contest_prizes";
    const CONTEST_ID = 'contest_id';
    const PRIZE_VALUE = 'prize_value';
    const START_RANGE = 'start_range';
    const END_RANGE = 'end_range';

    protected $fillable = [
        self::CONTEST_ID,
        self::PRIZE_VALUE,
        self::START_RANGE,
        self::END_RANGE,
        self::CREATED_AT,
        self::CREATED_BY,
        self::UPDATED_AT,
        self::UPDATED_BY,
    ];

    public function contest()
    {
        return $this->belongsTo(Contest::class);
    }
}

