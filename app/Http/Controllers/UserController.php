<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){

$users =array(
    array('name'=>'john','Age'=>30),
    array('name'=>'snow','Age'=>10),
    array('name'=>'snow','Age'=>10)
);
// echo"<pre>";
// print_r($users);

        return view('firstPage',['users'=>$users]);
        
        
        // echo "<h1>rustam  </h1>";
        // echo"<h1>nepal </h1>";
        // echo"<h1>hahahhaha </h1>";
    }
}

// $array = array('name' =>'rustam','country' => 'country');