<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class purchase extends Model
{
    protected $fillable = ['purchase_id', 'user_id', 'product_id', 'quantity', 'total_price'];
    protected $primaryKey = 'purchase_id';

    public function product()
    {

        return $this->belongsTo(product::class);


    }

    public function tranactions()
    {

        return $this->hasMany(transaction::class);
    }


    public function user()
    {

        return $this->belongsTo(User::class);


    }


}
