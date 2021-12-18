<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ShopItemController;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('shop', ShopItemController::class);

Route::resource('question', QuestionController::class);

Route::get('question/{topic:id}/{question:id}', [QuestionController::class, 'showQuestion']);
Route::post('question/{topic:id}/{question:id}', [QuestionController::class, 'answerQuestion']);

Route::get('admin/question/create',[QuestionController::class,'create']);
Route::get('admin/question',[QuestionController::class,'index']);
Route::get('admin/question/{question:id}/edit',[QuestionController::class,'edit']);
Route::post('shop/buy/{id}', [ShopItemController::class, 'buy'])->name('shop.buy');

