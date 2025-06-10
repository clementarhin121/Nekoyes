<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transactions extends Model
{
    public function customer()
    {
        return $this->belongsTo(customers::class)

        ;
    }
}
