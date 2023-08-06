<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/subScriptionPlans', [App\Http\Controllers\HomeController::class, 'getSubscriptionPlans']);

Route::any('stripe', array(
    'uses' => 'App\Http\Controllers\StripePaymentController@stripe',
    'as'   => 'stripe'
));
Route::any('stripe', array(
    'uses' => 'App\Http\Controllers\StripePaymentController@stripe',
    'as'   => 'stripe'
));
Route::any('stripe_post', array(
    'uses' => 'App\Http\Controllers\StripePaymentController@stripePost',
    'as'   => 'stripe_post'
));
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
