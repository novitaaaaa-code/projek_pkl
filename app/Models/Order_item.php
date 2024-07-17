<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{
    use HasFactory;

    public $fillable = ['id','order_id','produk_id','quantity','price'];
    public $timestamps = true;

    public function Produk() {
        return $this->belongsto(Produk::class, 'produk_id');
    }
    public function order() {
        return $this->belongsto(Order::class, 'order_id');
    }
}
