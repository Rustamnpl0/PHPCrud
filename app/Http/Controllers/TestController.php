<?php
namespace App\Http\Controllers;

class TestController extends Controller {
    public function show($name,$id){
        echo"Name:".$name;
        echo"<br>";
        echo"ID:".$id;
        echo"<h1>TestController is working </h1>";

    }
}