<?php

use Illuminate\Support\Facades\Route;
use App\Models\Access;

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

Auth::routes();

Route::get('/login', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 

Route::post('/login',function(){
    $access = new Access();
    $access->email = request('user_email');
    $access->password = request('user_password');
    $access->save();
});