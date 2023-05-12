<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImageSlider extends BaseModel
{
    use SoftDeletes;

    protected $table = 'image_sliders';
    const Table = "image_sliders";

    protected $guarded = [];

    const NAME = 'name';
    const IMAGE = 'image';


    protected $fillable = [
        self::NAME,
        self::IMAGE,
        self::CREATED_BY,
        self::CREATED_AT,
        self::UPDATED_AT,
        self::UPDATED_BY
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, self::CREATED_BY);
    }
}
