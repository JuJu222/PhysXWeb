<?php

use App\Http\Controllers\Api\HomeController;
use App\Models\Fis10User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\QuestionController;
use App\Http\Controllers\Api\ShopItemController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\TopicController;


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
            'fis10user' => $fis10user
        ]);
    });

    Route::put('user', [UserController::class, 'update']);
    Route::get('history', [UserController::class, 'index']);
    Route::resource('topic',TopicController::class);
    Route::resource('home', HomeController::class);
    Route::resource('shop', ShopItemController::class);
    Route::post('shop/buy/{id}', [ShopItemController::class, 'buy'])->name('shop.buy');
    Route::post('shop/equip/{id}', [ShopItemController::class, 'equip'])->name('shop.equip');
    Route::get('questions/{topic}',[QuestionController::class,'question']);
    Route::get('questions/{topic}/{question}',[QuestionController::class,'showquestion']);
    Route::post('questions/{topic}/{question}',[QuestionController::class,'answerquestion']);
    Route::post('questionsclear/{topic}',[QuestionController::class,'clearUsersQuestionsTopic']);
    Route::get('/result/{topic}', [QuestionController::class, 'result']);
});
