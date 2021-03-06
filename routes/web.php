<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Route::get('/',[TodoListController::class, 'index']);

//Route::post('/saveItemRoute',[TodoListController::class, 'saveItem'])->name('saveItem');
Route::get('/', function () {
    return view('index');
});

Route::get('/macbook', function () {
    return view('mail-in-macbook');
});

Route::get('/ps5', function () {
    return view('mail-in-ps5');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/sample', function () {
    return view('sample');
});

Route::get('/shipping-label.php', function () {
    return view('shipping-label');
});
