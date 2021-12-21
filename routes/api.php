<?php

use App\Http\Controllers\Api\ShopItemController;
use App\Models\Fis10User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [RegisterController::class, 'register']);
Route::post('login',[LoginController::class, 'login']);

Route::group(['middleware'=> 'auth:api'], function(){
    Route::post('logout',[LoginController::class,'logout']);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    $fis10user = Fis10User::query()->where('user_id', $request->user()->id)->first();

    return response()->json([
        'user' => $request->user(),
        'fis10user' => $fis10user
    ]);
});

Route::resource('shop', ShopItemController::class);
Route::post('shop/buy/{id}', [ShopItemController::class, 'buy'])->name('shop.buy');
