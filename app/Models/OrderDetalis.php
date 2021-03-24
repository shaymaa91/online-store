<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetalis extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'product_id',
        'price',
        'quantity',
        'total_price',
    ];
    protected $table = 'order_details';
   
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
