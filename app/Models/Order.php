<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded=[];

    protected $append=["order_id","status_name"];

    public function getOrderIdAttribute()
    {
        return "#ORD".str_pad($this->id, 6, "0", STR_PAD_LEFT);
    }

    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, "order_id");
    }

    public static function statuses(){
        return [
            "pending"=>"Pending",
            "processing"=>"Processing",
            "completed"=>"Completed",
            "declined"=>"Declined"
        ];
    }

    public function getStatusNameAttribute()
    {
        return self::statuses()[$this->status];
    }
}
