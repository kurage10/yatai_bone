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
      $all_sum = 0;
      foreach($foods as $food){
        $details = $food->details()->get();
        #var_dump($food->details());
        $sum = 0;
        if(count($details) > 0){
          foreach($details as $detail){
            $sum = $sum + $detail->num;
          }
        }
        $all_sum = $all_sum + $sum * $food->price;
        $foods_list[] = array('name' => $food->name, 'name_id' => $food->name_id, "sum" => $sum);
      }
      return view('price',compact('foods_list','all_sum'));

    }

    public function save(Request $request){
      #var_dump($request->all());
      $order = new Order;
      $order->save();
      $foods = Food::all();

      foreach($foods as $food){
        $detail = new Detail;
        #var_dump($request->input($food->name_id));
        $num = $request->input($food->name_id);
        if($num == NULL){
          $detail->num = 0;
        }else{
          $detail->num = $num;
        }

        $detail->food()->associate($food->id);
        $detail->order()->associate($order->id);
        $detail->save();
      }


      return $this->view();
    }
}
