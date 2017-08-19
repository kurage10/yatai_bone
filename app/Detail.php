<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = ['food_id', 'order_id'];
    public function food(){
      return $this->belongsTo("App\Food");
    }
    public function order(){
      return $this->belongsTo("App\Order");
    }
}
