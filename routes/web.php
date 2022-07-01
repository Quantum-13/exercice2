<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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

// Route::get('/home', function () {
//     return view('home');
// });



// Route::get('/', function () {
//     return view('welcome');
// });



/* GET /products - Lister les produits */
Route::get('/giftcard', [GiftCardController::class, 'showAll'])->name('giftcard.show');


/* POST /products - recevoir info formulaire */
Route::post('/giftcard', [GiftCardController::class, 'recept'])->name('giftcard.recept');