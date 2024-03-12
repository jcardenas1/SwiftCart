<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class PaymentMethod extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * 
     */
    protected $fillable = [
        'account_type',
        'account_number',
        'due_date',
    ];

    public function user(){
        return $this->belongsTo(User::class)->withDefault([
            'name' => 'Anónimo',
        ]);
    }
}
