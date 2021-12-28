<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ShopItemController;
use App\Http\Controllers\OptionmcqController;
use App\Http\Controllers\OptiontofController;
use App\Http\Controllers\OptionfitbController;
use App\Http\Controllers\TopicController;
use Symfony\Component\HttpFoundation\Request;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('shop', ShopItemController::class);
    Route::resource('question', QuestionController::class);
    Route::resource('optionmcq', OptionmcqController::class);
    Route::resource('optionfitb', OptionfitbController::class);
    Route::resource('optiontof', OptiontofController::class);
    Route::resource('topics', TopicController::class);
    Route::resource('fis10user', Fis10UserController::class);
    Route::resource('leaderboards',LeaderboardController::class);

    Route::get('/questions/{topic}', [QuestionController::class, 'showQuestion'])->name('questionSoal');
    Route::post('/questions/{topic}', [QuestionController::class, 'answerQuestion']);
    Route::get('/questions/{topic}/result', [QuestionController::class, 'result'])->name('questions.result');
    Route::get('/questionsclear', function (Request $request) {
        $request->session()->forget('nosoal');
        redirect('/');
    });

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
    Route::post('shop/equip/{id}', [ShopItemController::class, 'equip'])->name('shop.equip');
    
    Route::resource('profile', ProfileController::class);
  
    Route::get('topic/{id}',[TopicController::class, 'show']);
});
