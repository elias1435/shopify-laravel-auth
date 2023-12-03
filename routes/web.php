<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopifyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// after / add the class name and add comma with method name
Route::get('/hi/{name?}', [ShopifyController::class, 'sayHi']);

Route::post('/spr', [ShopifyController::class, 'managePostRequest']);
