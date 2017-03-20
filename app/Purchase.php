<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'userid', 'event', 'masterid', 'amount', 'stripe_transaction_id',
    ];
}
