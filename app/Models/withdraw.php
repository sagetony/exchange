<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class withdraw extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'transactionId',
        'userId',
        'username',
        'email',
        'paymentMethod',
        'amount',
        'paymentType',
        'status',
        'wallet',
        'coin',
    ];
}
