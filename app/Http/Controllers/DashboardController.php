<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function view(){
      $sum = 0;
      return view('price', ['sum' =>  compact('sum')]);
    }

    public function save(Request $request){
      $sum = $request->input('count');
      echo "<p>" . $sum . "</p>";
      return view('price', ['sum' =>  compact('sum')]);
    }
}
