<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

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
     public function admin()
    {
        return view('test.admin');
    }
         public function master()
    {
        return view('layouts.master');
    }
     public function demo(Request $request)
     { return $request->all();
        // return view('test.demo')->with (['name'=> '品爵','age' => '<b>18</b>']);
        //第二種
        //  $data = [];
        //  $data ['name'] = '品爵';
        //  $data ['age'] = '<b>19</b>';
        // return view('test.demo',$data);
        //第三種
        //  $name = '品爵';
        //  $age = '<b>18</b>';
        //  return view('test.demo', compact('name', 'age'));
     }
    }