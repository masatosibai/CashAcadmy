<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Spatie\GoogleCalendar\Event;
use Carbon\Carbon;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

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

//トップ画面
Route::match(['get', 'post'], '/', [HomeController::class, "index"])->name('home.index');
//予約情報入力画面
Route::match(['get', 'post'], '/contact', [ReservationController::class, "index"])->name('contact.index');
//予約情報確認画面
Route::post('/contact/confirm', [ReservationController::class, "confirm"])->name('contact.confirm');
//登録完了画面
Route::post('/contact/thanks', [ReservationController::class, "send"])->name('contact.send');
//システム管理者ユーザー一覧
Route::match(['get', 'post'], '/admin/users', [UserController::class, "users"])->name('admin.users')->middleware('auth');
//予約情報一覧画面
Route::match(['get', 'post'], '/admin/contacts', [ContactController::class, "contacts"])->name('admin.contacts')->middleware('auth');;
