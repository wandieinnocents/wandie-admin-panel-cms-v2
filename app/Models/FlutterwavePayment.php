<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlutterwavePayment extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount',
        'email',
        'phone_number',
        'title',
        'description'
    ];
}
