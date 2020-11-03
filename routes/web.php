<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IkingsController;
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
Route::get('/index', [App\Http\Controllers\IkingsController::class, 'index']);
Route::get('/services', [App\Http\Controllers\IkingsController::class, 'services']);
Route::get('/case-studies', [App\Http\Controllers\IkingsController::class, 'casestudies']);
Route::get('/articles', [App\Http\Controllers\IkingsController::class, 'articles']);
Route::get('/about', [App\Http\Controllers\IkingsController::class, 'about']);
Route::get('/contact', [App\Http\Controllers\IkingsController::class, 'contact']);
Auth::routes();

Route::group(['middleware' =>['auth', 'admin']], function(){
	Route::get('/dashboard',[AdminController::class,'dashboard']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::any('/{page?}',function(){
  return View::make('errors.404');
})->where('page','.*');
