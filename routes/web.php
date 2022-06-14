<?php

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

Route::get('/', function(){
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Web LOGIN
|--------------------------------------------------------------------------
|
|
*/
Route::get('/google_login', [App\Http\Controllers\Auth\LoginController::class, 'redirectToProvider'])->name('google_login');
Route::get('/google_login_callback', [App\Http\Controllers\Auth\LoginController::class, 'handleProviderCallback']);

//Route::get('/user/{id}', [App\Http\Controllers\UserViewController::class, 'getImage'])->name('add_avatar');
//Route::post('/user/{id}', [App\Http\Controllers\UserViewController::class, 'postImage']);

//get server user
Route::post('/login', [App\Http\Controllers\UserViewController::class, 'postlogin'])->name('postlogin');
Route::get('/user', [App\Http\Controllers\UserViewController::class, 'index'])->name('user');

Route::get('/emr_list', [App\Http\Controllers\EmrListController::class, 'index'])->name('emr_list');
Route::post('/emr_list/create', [App\Http\Controllers\EmrListController::class, 'create'])->name('emr_list_create');


/*
|--------------------------------------------------------------------------
| Web POST
|--------------------------------------------------------------------------
|
|
*/
//Route::post('/login', [App\Http\Controllers\UserViewController::class, 'login_local'])->name('login_local');

//get local
//Route::middleware('auth:sanctum')->group(function () {
//    Route::get('/user', [App\Http\Controllers\UserViewController::class, 'index_local'])->name('user');
//
//    Route::get('/category', [App\Http\Controllers\CategoryViewController::class, 'index']);
//    Route::get('/category/create', [App\Http\Controllers\CategoryViewController::class, 'create']);
//    Route::get('/category/export', [App\Http\Controllers\CategoryViewController::class, 'exportExcel'])->name('category.export');
//    Route::post('/category/import', [App\Http\Controllers\CategoryViewController::class, 'importExcel'])->name('category.import');
//});

