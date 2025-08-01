<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    protected $fillable = ['customer_id', 'purchase_id', 'transaction_id', 'payment', 'card_number', 'amount'];
    public function customer()
    {
        return $this->belongsTo(customer::class)


        ;
    }


    public function purchase()
    {


        return $this->belongsTo(purchase::class);
    }

}
