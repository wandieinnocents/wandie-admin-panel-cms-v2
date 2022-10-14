<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// customer
use App\Http\Controllers\Api\v1\Customer\CustomerApiFeedbackController;
// admin
use App\Http\Controllers\Api\v1\Admin\AdminApiPostController;
use App\Http\Controllers\Api\v1\Admin\AdminApiFeedbackController;
use App\Http\Controllers\Api\v1\Admin\AdminApiVolunteerController;
use App\Http\Controllers\Api\v1\Admin\AdminApiPhotoCategoryController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// prefix-group //v1-prefix
Route::group(['prefix'=> "v1"], function(){

// BACKEND APIS
// posts
Route::resource('posts', AdminApiPostController::class);
// feedbacks
Route::resource('feedbacks', AdminApiFeedbackController::class);
// volunteer
Route::resource('volunteers', AdminApiVolunteerController::class);
// photo category
Route::resource('photo_categories', AdminApiPhotoCategoryController::class);





// FRONTEND APIS
// contact
Route::resource('contact', CustomerApiFeedbackController::class);







});


