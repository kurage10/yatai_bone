<?php

namespace App\Http\Controllers;

use App\Order;
use App\Detail;
use App\Food;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function view(){
      $foods = Food::all();
      $foods_list = array();

      foreach($foods as $food){
        $details = $food->details();
        $sum = 0;
        if(count($details) > 0){
          foreach($details as $detail){
            $sum = $sum + $detail->num * $food->price;
          }
        }
        $foods_list[] = array('name' => $food->name, 'name_id' => $food->name_id, "sum" => $sum);
      }
      var_dump($foods_list);
      return view('price',compact('foods_list'));

    }

    public function save(Request $request){

    }
}
