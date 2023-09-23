<?php

use App\Http\Controllers\NewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/profile', [UserController::class,'user']);







// Route::get('/firstPage', function () {
//     return view('firstPage');
// });


// Route::get('/profile', function () {
//     return view('user');
// });

// Route::get('/profile/{name}/{country}', function ($name,$country) {
//     $array = array('name' => $name,'country' => $country);
//     return view('user',$array);
// });




Route::get('/new',[NewController :: class,'example']);
Route::post('/save',[NewController :: class,'save']);

// use App\Http\Controllers\TestController;
// Route::get('/test/{name}/{id}',[TestController :: class,'show']);

