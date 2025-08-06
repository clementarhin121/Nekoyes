<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class purchase extends Model
{
    protected $fillable = ['purchase_id', 'product_id', 'quantity', 'total_price'];
    protected $primaryKey = 'purchase_id';

    public function product()
    {

        return $this->belongsTo(product::class);


    }

    public function tranactions()
    {

        return $this->hasMany(transaction::class);
    }

}
