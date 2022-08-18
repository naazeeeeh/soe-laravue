<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model {

    use SoftDeletes;

    protected $fillable = [
        'uuid',
        'customer_name',
        'customer_email',
        'customer_number',
        'customer_address',
        'transaction_total',
        'transaction_status',
    ];

    protected $hidden = [];

    public function details() {
        return $this->hasMany(TransactionDetail::class, 'transactions_id');
    }
}
