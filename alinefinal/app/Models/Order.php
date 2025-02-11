<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
       'user_id',
       'order_number',
       'total_amount',
       'shipping_address',
       'name',
       'phone',
       'email',
       'payment_method'
    ];
    public function orderDetails()
    {
        return $this->hasMany(Order_detail::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
