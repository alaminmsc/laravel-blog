<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;  

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

Route::get('/hello', function () {
    return view('hello');
});

// Route::get('/hello', function(){
//     return view('hello');;
// });

// Route::get('/no', [StudentController::class, 'sayHello']);


// Route::match(['get','post'],'/test',function(){
//     return "Yes, I am";
// });

// use Illuminate\Http\Request;

// Route::get('/user/{name}/{age}', function(Request $request) {
//     return 'Welcome '.$request->name. ' you are at '.$request->age;
// });

// Route::permanentRedirect('/hi','/students');

// Route::view("/welcome",'welcome'); //welcome is view page

// $data = ["id"=>2, "name"=>"Alamin","age"=>40];
// Route::view('/students','hello',$data);

// // Route::get('/user/{name?}/{age?}', function(Request $request) {
// //     return 'Welcome '.$request->name. ' you are at '.$request->age;
// // });

// //Default parameter.
// // Route::get('/user3/{name?}/{age?}', function($name="Alamin", $age=25) {
// //     return 'Welcome '.$name. ' you are at '.$age;
// // });

// Route::get('/user4/{name}',function($name){
//     return "Name ".$name;
// })->where('name','[A-Za-z]+'); //only Alphabetical value

// Route::get('/user5/{age}',function($age){
//     return "Age ".$age;
// })->where('age','[0-9]+'); //only numerical value


// Route::get('/user/{name}',[StudentController::class, 'showName'])
// ->where('name','[A-Za-z]+');


// Route::get('/user/{name}/{age}',
//     [StudentController::class, 'showInfo']
// )->whereAlpha('name')->whereNumber('age');

//Route::get('/users/{age}',[StudentController::class, 'showInfo']);

/* Route::get('/search/{search}',function($search){
    return $search;
})->where('search','.*');
*/

/*
Route::get('/user/profile/test', function(Request $r){
    echo "Welcome ".$r->name. " you are at ".$r->age. " years old";
})->name('profile');

Route::get('/urltest',[StudentController::class, 'user']);
*/

/*
Route::group([], function(){
    Route::get('/create',function(){
        echo "First route for Create/Insert";
    });
    Route::get('/read',function(){
        echo "Second route for Read";
    });
    Route::get('/update',function(){
        echo "Third route for Update";
    });
    Route::get('/delete',function(){
        echo "Fourth route for Delete";
    });
});

*/
/*
Route::group([], function(){
    Route::get('/create',[StudentController::class, 'create']);
    Route::get('/read',[StudentController::class, 'read']);
    Route::get('/update',[StudentController::class, 'update']);
    Route::get('/delete',[StudentController::class, 'delete']);
});
*/

Route::group(["prefix"=>"students"], function(){
    Route::get('/update/{id}',[StudentController::class, 'update'])->name('update');
    Route::get('/delete/{id}',[StudentController::class, 'delete']);
});
