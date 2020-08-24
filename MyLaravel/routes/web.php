<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('fullname/{name}', function ($name) { 
    echo $name;
    });

Route::get('la/{date}', function ($date) { 
    echo "Day: " .$date;
    })->where (['date'=>'[a-zA-Z]+']);

Route::get('Route1', ['as'=>'MyRoute', function(){
    echo "hello123";
}]);

Route::get('Route2', function(){
    echo "this is route 2";
})->name('MyRoute2');

Route::get('call', function(){
    return redirect()->route('MyRoute2');
});

Route::group(['refix'=>'MyGroup'], function(){
    //goi route user1: ../MyGroup/user1
    Route::get('user1', function(){
        echo "user1";
    });

    Route::get('user2', function(){
        echo "user2";
    });

    Route::get('user3', function(){
        echo "user3";
    });
});

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about'); 
// Route::get('/contact', 'PagesController@contact');
Route::get('/contact', 'TicketsController@create');
Route::post('/contact', 'TicketsController@store');
Route::get('/tickets', 'TicketsController@index');
Route::get('/tickets/{slug?}', 'TicketsController@show');
Route::get('/ticket/{slug?}/edit','TicketsController@edit');
Route::post('/ticket/{slug?}/edit','TicketsController@update');
Route::post('/ticket/{slug?}/delete','TicketsController@destroy');

Route::get('sendemail', function () {
   $details = [
        'title'=>'Mail from Surfside Media',
   ];
   \Mail::to('truc.11119999@gmail.com')->send(new \App\Mail\TestMail($details));
    echo "Email has been sent!";    
});
    
Route::post('/comment', 'CommentsController@newComment');





    