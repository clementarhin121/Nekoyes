<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    protected $fillable = ['customer_id', 'first_name', 'last_name', 'location', 'email', 'password'];

    public function transactions()
    {
        return $this->hasMany(transactions::class);


    }
}
