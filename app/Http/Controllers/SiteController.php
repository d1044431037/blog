<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function hello(){
      return 'hello';
    }

    #public function play ($id){
     #   if($id == 1){
      #      return view ('game1');
       #  } elseif ($id == 2) {
        #     return view('game2');

            # code...
     #     }
      #  }
        public function game(){
         return view('game');
       }
    }