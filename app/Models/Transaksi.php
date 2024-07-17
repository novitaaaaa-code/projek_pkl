<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    public $fillable = ['id','order_id','transaksi_method','transaksi_status'];
    public $timestamps = true;

    public function order() {
        return $this->belongsto(Order::class, 'order_id');
    }
}
