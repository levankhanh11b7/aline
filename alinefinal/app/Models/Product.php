<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order_detail;

class Product extends Model
{
    use HasFactory;

    public function orderDetails()
{
    return $this->hasMany(Order_Detail::class, 'product_id');
}
}
