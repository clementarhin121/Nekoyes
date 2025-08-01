<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class product extends Model
{
    protected $fillable = ['product_id', 'product_name', 'product_image', 'product_location', 'product_quantity', 'product_price'];
    protected $primaryKey = 'product_id';

    public function purchases()
    {
        return $this->hasMany(purchase::class);


    }

}
