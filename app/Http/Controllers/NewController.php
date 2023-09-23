<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewController extends Controller
{
    public function example(){
        return view('firstPage');
}
public function save(Request $request){
    $validator =validator::make($request->all(),[
        'Email'=> 'required|email',
        'password'=> 'required|unique:loginform,password'
    ]);

    if($validator->fails()){
        return redirect('/new')->withInput()->withErrors($validator);
    }

    //here we can save values in database
}
}
