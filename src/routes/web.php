<?php

use App\Http\Controllers\ShopController;
// use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;


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

// Route::get('/', function () {
//     return view('welcome');
// });


// 飲食店一覧画面のビューを作成
Route::get('/', [ShopController::class,'index']);

// 飲食店詳細画面のビューを作成
Route::get('/detail/{shop}', [ShopController::class, 'detail']);

// 会員登録画面のビューを作成
Route::get('/register', [RegisteredUserController::class, 'create']);

// 会員登録処理
Route::post('/register', [RegisteredUserController::class, 'store']);

// ログイン画面のビューを作成
Route::get('/login', [AuthenticatedSessionController::class, 'create']);

// ログイン処理
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');

// ログアウト処理
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth');

// マイページ表示
Route::get('/mypage', [UserController::class, 'mypage'])->middleware('auth');

// お気に入り登録処理
Route::post('/favorite', [FavoriteController::class, 'create'])->middleware('auth');

// お気に入り解除処理
Route::post('/favorite/delete', [FavoriteController::class, 'delete'])->middleware('auth');

// 予約登録処理
Route::post('/reserve', [ReservationController::class, 'create'])->middleware('auth');

// 予約取消処理
Route::post('/reserve/delete', [ReservationController::class, 'delete'])->middleware('auth');

// 以下は、htmlとcssで概観のみ作成するためのルーティング

Route::get('/done', [ShopController::class, 'done']);

Route::get('/thanks', [ShopController::class, 'thanks']);

// Route::get('/login', [ShopController::class, 'login']);
// Route::get('/register', [AuthController::class, 'create']);

Route::get('/aaa', [ShopController::class, 'aaa']);


