<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function hello()
    {
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
    public function game()
    {
        return view('game');
    }
    public function album()
    {
        return view('album');
    }
    public function demo()
    {
        // return view('test.demo')->with (['name'=> '品爵','age' => '<b>18</b>']);
        //第二種
         $data = [];
         $data ['name'] = '品爵';
         $data ['age'] = '<b>19</b>';
        return view('test.demo',$data);
        //第三種
        //  $name = '品爵';
        //  $age = '<b>18</b>';
        //  return view('test.demo', compact('name', 'age'));

    }
}