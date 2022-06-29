<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'categories_id',
        'product_name',
        'merk',
        'buy_price',
        'discount',
        'sale_price',
        'stock'
    ];
}
