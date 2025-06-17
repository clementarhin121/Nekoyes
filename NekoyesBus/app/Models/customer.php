<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $fillable = ['customer_id', 'first_name', 'last_name', 'location', 'email', 'password'];

    public function transactions()
    {
        return $this->hasMany(transaction::class);


    }
}
