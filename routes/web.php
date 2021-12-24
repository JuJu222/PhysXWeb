<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ShopItemController;
use App\Http\Controllers\OptionmcqController;
use App\Http\Controllers\OptiontofController;
use App\Http\Controllers\OptionfitbController;
use App\Http\Controllers\TopicController;

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


Route::resource('shop', ShopItemController::class);
Route::resource('question', QuestionController::class);
Route::resource('optionmcq', OptionmcqController::class);
Route::resource('optionfitb', OptionfitbController::class);
Route::resource('optiontof', OptiontofController::class);
Route::resource('topics', TopicController::class);
Route::resource('fis10user', Fis10UserController::class);
Route::resource('fis10usertopics', Fis10UserTopikController::class);

Route::get('/question/{topic}/{question}', [QuestionController::class, 'showQuestion'])->name('questionSoal');
Route::post('/question/{topic}/{question}', [QuestionController::class, 'answerQuestion']);

Route::get('admin/question/create',[QuestionController::class,'create']);
Route::get('admin/question',[QuestionController::class,'index']);
Route::get('admin/question/{question:id}/edit',[QuestionController::class,'edit']);

Route::get('admin/optionmcq/create',[OptionmcqController::class,'create']);
Route::get('admin/optionmcq',[OptionmcqController::class,'index']);
Route::get('admin/optionmcq/{optionmcq:id}/edit',[OptionmcqController::class,'edit']);

Route::get('admin/optionfitb/create',[OptionfitbController::class,'create']);
Route::get('admin/optionfitb',[OptionfitbController::class,'index']);
Route::get('admin/optionfitb/{optionfitb:id}/edit',[OptionfitbController::class,'edit']);

Route::get('admin/optiontof/create',[OptiontofController::class,'create']);
Route::get('admin/optiontof',[OptiontofController::class,'index']);
Route::get('admin/optiontof/{optiontof:id}/edit',[OptiontofController::class,'edit']);

Route::post('shop/buy/{id}', [ShopItemController::class, 'buy'])->name('shop.buy');

Route::get('/',[TopicController::class, 'index']);
Route::get('topic/{id}',[TopicController::class, 'show']);
