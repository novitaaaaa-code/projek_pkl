<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $fillable = ['id','user_id','order_status','total_price','shipping_address'];
    public $timestamps = true;

    public function User() {
        return $this->belongsTo(User::class, 'user_id');
}
public function transaksi(){
    $this->belongsto(Transaksi::class, 'order_id');
}
    }

