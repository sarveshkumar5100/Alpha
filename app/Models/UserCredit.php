<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCredit extends Model
{
    // Constants
    const TYPE_DEBIT = 'debit';
    const TYPE_CREDIT = 'credit';

    // Constants
    const TXN_ID = 'txn_id';
    const TYPE = 'type';
    const CLOSING_BALANCE = 'closing_balance';
    const AMOUNT = 'amount';
    const REMARKS = 'remarks';
    const DESCRIPTION = 'description';
    const CREATED_BY = 'created_by';
    const UPDATED_BY = 'updated_by';

    // Fillable fields
    protected $fillable = [
        self::TXN_ID,
        self::TYPE,
        self::CLOSING_BALANCE,
        self::AMOUNT,
        self::REMARKS,
        self::DESCRIPTION,
        self::CREATED_BY,
        self::UPDATED_BY,
    ];

    // Relationships
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
