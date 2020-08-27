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
// Route::get('users/register', 'Auth\AuthController@getRegister');  //registration form 
// Route::post('users/register', 'Auth\AuthController@postRegister');//process the form


    
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'PagesController@home');

Route::get('register', 'Auth\RegisterController@getRegister');
//Route::post('register', 'Auth\RegisterController@postRegister');

Route::get('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
//Route::post('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@postLogin']);

Route::get('logout', [ 'as' => 'logout', 'uses' => 'Auth\LogoutController@getLogout']);


Route::group(array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' =>'manager'), function () { 
    Route::get('users', [ 'as' => 'admin.user.index', 'uses' => 'UsersController@index']); 
    Route::get('roles', 'RolesController@index'); 
    Route::get('roles/create', 'RolesController@create'); 
    Route::post('roles/create', 'RolesController@store');
    Route::get('users/{id?}/edit', 'UsersController@edit'); 
    Route::post('users/{id?}/edit','UsersController@update'); 
});




