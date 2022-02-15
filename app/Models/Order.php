<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'users_id',
        'ebooks_id',
        'order_date',
    ];

    protected $hidden = [
        
    ];
    protected $casts = [
        'order_date' => 'datetime',
    ];
}
