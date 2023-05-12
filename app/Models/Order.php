<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $table = 'orders';
    const Table = "orders";

    protected $guarded = [];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'deleted_at';

    const CONTEST_ID = 'contest_id';
    const USER_ID = 'user_id';
    const AMOUNT = 'amount';
    const STATUS = 'status';
    const CREATED_BY = 'created_by';
    const UPDATED_BY = 'updated_by';

    protected $fillable = [
        self::CONTEST_ID,
        self::USER_ID,
        self::AMOUNT,
        self::STATUS,
        self::CREATED_BY,
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, self::CREATED_BY);
    }

    public function updater()
    {
        return $this->belongsTo(User::class, self::UPDATED_BY);
    }

    public function contest()
    {
        return $this->belongsTo(Contest::class, self::CONTEST_ID);
    }

    public function user()
    {
        return $this->belongsTo(User::class, self::USER_ID);
    }
}

