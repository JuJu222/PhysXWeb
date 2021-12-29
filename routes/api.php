<?php

use App\Models\Fis10User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\QuestionController;
use App\Http\Controllers\Api\ShopItemController;
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

    Route::get('/user', function (Request $request) {
        $fis10user = Fis10User::query()->where('user_id', $request->user()->id)->first();

        return response()->json([
            'user' => $request->user(),
            'fis10user' => [
                'fis10_user_id' => $fis10user->fis10_user_id,
                'user_id' => $fis10user->user_id,
                'coins' => $fis10user->coins,
                'title' => $fis10user->shopItemTitle->item,
                'avatar' => $fis10user->shopItemAvatar->item,
                'created_at' => $fis10user->created_at,
                'updated_at' => $fis10user->updated_at,
            ]
        ]);
    });

    Route::post('shop/buy/{id}', [ShopItemController::class, 'buy'])->name('shop.buy');
    Route::get('questions/{topic}',[QuestionController::class,'question']);
    Route::get('questions/{topic}/{question}',[QuestionController::class,'showquestion']);
    Route::post('questions/{topic}/{question}',[QuestionController::class,'answerquestion']);
});
Route::resource('shop', ShopItemController::class);
Route::resource('question',QuestionController::class);
