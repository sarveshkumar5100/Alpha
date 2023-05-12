<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserContestStock extends Model
{
    use SoftDeletes;

    protected $table = 'user_contest_stocks';

    protected $guarded = [];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'deleted_at';

    const USER_ID = 'user_id';
    const STOCK_ID = 'stock_id';
    const CONTEST_ID = 'contest_id';
    const STATUS = 'status';

    protected $fillable = [
        self::USER_ID,
        self::STOCK_ID,
        self::CONTEST_ID,
        self::STATUS,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }

    public function contest()
    {
        return $this->belongsTo(Contest::class);
    }
}
