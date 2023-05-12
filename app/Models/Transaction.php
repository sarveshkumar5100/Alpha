<?php

namespace App\Models;

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends BaseModel
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public const UUID = 'uuid';
    public const ORDER_ID = 'order_id';
    public const AMOUNT = 'amount';
    public const GATEWAY_DATA = 'gateway_data';
    public const PAYMENT_SOURCE = 'payment_source';
    public const STATUS = 'status';
    public const TYPE = 'type';
    public const REMARKS = 'remarks';
    public const PAYMENT_SOURCE_RAZORPAY = 'Razorpay';
    public const PAYMENT_SOURCE_OTHER = 'other';

    public const STATUS_PENDING = 'pending';
    public const STATUS_COMPLETED = 'completed';
    public const STATUS_FAILED = 'failed';

    public const TYPE_GATEWAY = 'gateway';
    public const TYPE_DEBIT = 'debit';
    public const TYPE_CREDIT = 'credit';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::UUID,
        self::ORDER_ID,
        self::AMOUNT,
        self::GATEWAY_DATA,
        self::PAYMENT_SOURCE,
        self::STATUS,
        self::TYPE,
        self::REMARKS,
        self::CREATED_BY,
        self::UPDATED_BY,
        self::CREATED_AT,
        self::UPDATED_AT,
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * Get the user who created the transaction.
     */
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Get the user who last updated the transaction.
     */
    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}

