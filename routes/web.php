<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
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
    return view('homepage');
});

Route::get('/destinations', function () {
    return view('amazingplaces');
})->name('destinations');

Route::post('/sendfeedback',[FeedbackController::class,'sendFeedback'])->name('sendFeedback');
Route::post('/booktravel',[FeedbackController::class,'bookTravel'])->name('bookTravel');

