<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function welcome()
    {
        return view('welcome');

     /*
      $a = 5;
      $b = 10;
      $c = $a + $b;
      return "El Valor de la suma es : $c";
     */

    }
}
