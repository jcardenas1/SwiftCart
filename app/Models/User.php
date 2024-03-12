<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * 
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'id_payment_method',
    ];

    public function payment_methods(){
        return $this->hasMany('App\Models\PaymentMethod');
    }
}
