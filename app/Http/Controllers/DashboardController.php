<?php

namespace App\Http\Controllers;

use App\Order;
use App\Food;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function view(){
      $foods = Food::all();
      $foods_list = array();

      foreach($foods as $food){
        $orders = $food->orders();
        $sum = 0;
        if(count($orders) > 0){
          foreach($orders as $order){
            $sum = $sum + $order->num * $food->price;
          }
        }
        $foods_list[] = array('name' => $food->name, 'name_id' => $food->name_id, "sum" => $sum);
      }
      return view('price',compact('foods_list'));

    }

    public function save(Request $request){
      
    }
}
