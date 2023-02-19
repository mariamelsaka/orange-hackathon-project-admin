<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\AdminDashboardController;

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
//'middleware'=>'isAdmin'
Route::group(['prefix'=>'/admin'],function (){

    Route::get('/',[AdminDashboardController::class,"index"])->name('dashboard');
    

});