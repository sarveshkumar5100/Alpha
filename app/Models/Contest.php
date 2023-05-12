<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contest extends BaseModel
{
    use HasFactory, SoftDeletes;

    const NAME = 'name';
    const SHORT_CODE = 'short_code';
    const SPOTS = 'spots';
    const ENTRY_PRICE = 'entry_price';
    const DISCOUNTED_PRICE = 'discounted_price';
    const DISCOUNT = 'discount';
    const START_DATE = 'start_date';
    const END_DATE = 'end_date';
    const ANNOUNCE_TIME = 'announce_time';
    const IMAGE_ICON = 'image_icon';
    const CONTEST_TYPE = 'contest_type';
    const STATUS = 'status';
    const DESCRIPTION = 'description';


    protected $fillable = [
        self::NAME,
        self::SHORT_CODE,
        self::SPOTS,
        self::ENTRY_PRICE,
        self::DISCOUNTED_PRICE,
        self::DISCOUNT,
        self::START_DATE,
        self::END_DATE,
        self::ANNOUNCE_TIME,
        self::IMAGE_ICON,
        self::CONTEST_TYPE,
        self::STATUS,
        self::DESCRIPTION,
        self::CREATED_BY,
        self::UPDATED_BY,
        self::CREATED_AT,
        self::UPDATED_AT
    ];
}
